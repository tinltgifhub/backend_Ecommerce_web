<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/setup',function(){
    $credentials=[
        'email'=>'admin@admin.com',
        'password' => '123456',
    ];

    if(!Auth::attempt($credentials)){
        $user=new \App\Models\User();
        $user->name='Admin';
        $user->email=$credentials['email'];
        $user->password=bcrypt($credentials['password']);
        $user->save();

        
        if(Auth::attempt($credentials)){
            $adminToken = $user->createToken('admin-token',['create','update','delete']);
            $updateToken = $user->createToken('update-token',['create','update']);
            $basicToken = $user->createToken('basic-token');
            echo $adminToken->plainTextToken;
            echo $updateToken->plainTextToken;
            echo $basicToken->plainTextToken;
            return[
                'admin'=>$adminToken->plainTextToken,
                'update'=>$updateToken->plainTextToken,
                'basic'=>$basicToken->plainTextToken,
            ];
        }
    }
});
