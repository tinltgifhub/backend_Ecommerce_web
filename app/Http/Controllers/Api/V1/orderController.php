<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Collection;
use App\Http\Resources\V1\orderResource;
use App\Models\order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        return order::all();
    }

    public function store(Request $request)
    {
        return new orderResource(order::create($request->all()));

    }

    public function show(order $order)
    {
        return new orderResource($order);
    }

    public function edit(order $order)
    {
        return new orderResource($order);
    }

    public function update(order $order)
    {
        $order->update();
    }

    public function destroy(order $order)
    {
        $order->delete();
    }
}
