<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        return new UserResource(User::create($request->all()));
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        return new UserResource($user);
    }

    public function edit($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        return new UserResource($user);
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        $user->update($request->all());
    
        return new UserResource($user);
    }
    
    public function destroy($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        $user->delete();
    
        return response()->json(['message' => 'User deleted successfully']);
    }

    public function storeBulk(Request $request)
    {
        $dataToCreate = $request->input('data');

        User::insert($dataToCreate);

        return response()->json(['message' => 'Created successfully']);
    }

    public function updateBulk(Request $request)
    {
        $requestData = $request->json()->all();
        $ids = $requestData[0]['id'] ?? [];
        $dataToUpdate = $requestData['data'];
        return response()->json(count($requestData));
        // if (isset($requestData['data'])) {
        //     $ids = $requestData['ids'] ?? [];
        //     $dataToUpdate = $requestData['data'];
    
        //     // Thực hiện logic cập nhật
            // User::whereIn('id', $ids)->update($dataToUpdate);
    
        //     return response()->json(['message' => 'Updated successfully']);
        // } else {
        //     return response()->json(['message' => 'Invalid request format'], 400);
        // }
    }
    


    public function destroyBulk(Request $request)
    {
        $ids = $request->input('ids');
        User::whereIn('id', $ids)->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }

}
