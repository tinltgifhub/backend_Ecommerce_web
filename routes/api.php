<?php

use App\Http\Controllers\Api\V1\blogCategoryController;
use App\Http\Controllers\Api\V1\blogController;
use App\Http\Controllers\Api\V1\brandController;
use App\Http\Controllers\Api\V1\cartController;
use App\Http\Controllers\Api\V1\colorController;
use App\Http\Controllers\Api\V1\couponController;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\enqController;
use App\Http\Controllers\Api\V1\InvoiceController;
use App\Http\Controllers\Api\V1\orderController;
use App\Http\Controllers\Api\V1\productCategoryController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\productController;


use App\Models\Customer;
use App\Models\product;
use Database\Seeders\CustomerSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\Api\V1'],function(){
    Route::apiResource('customers',CustomerController::class);
    Route::apiResource('invoices',InvoiceController::class);

    Route::apiResource('User',UserController::class);
    Route::apiResource('product',productController::class);
    Route::apiResource('productCategory',productCategoryController::class);
    Route::apiResource('order',orderController::class);
    Route::apiResource('enq',enqController::class);
    Route::apiResource('coupon',couponController::class);
    Route::apiResource('cart',cartController::class);
    Route::apiResource('brand',brandController::class);
    Route::apiResource('blogCategory',blogCategoryController::class);
    Route::apiResource('blog',blogController::class);
    Route::apiResource('color',colorController::class);

    Route::post('users/destroy-bulk', 'UserController@destroyBulk');
    Route::post('users/update-bulk', 'UserController@updateBulk');
    Route::post('users/store-bulk', 'UserController@storeBulk');

    // Route::post('invoices/bulk',['uses'=>'InvoiceController@bulkStore']);
});

// , 'middleware'=>'auth:sanctum'