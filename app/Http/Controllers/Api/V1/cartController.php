<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\cartResource;
use App\Http\Resources\V1\Collection;
use App\Models\cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
        return new Collection(cart::all());
    }

    public function store(Request $request)
    {
       return new cartResource($request->all());
    }

    public function show(cart $cart)
    {
        return new cartResource($cart);
    }

    public function edit(cart $cart)
    {
        return new cartResource($cart);
    }

    public function update(cart $cart)
    {
        $cart->update();
    }

    public function destroy(cart $cart)
    {
        $cart->delete();
    }
}
