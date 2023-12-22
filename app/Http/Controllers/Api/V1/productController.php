<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\productCollection;
use App\Http\Resources\V1\productResource;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class productController extends Controller
{

    public function index()
    {
        return new productCollection(product::all());

    }


    public function store(Request $request)
    {
        return new productResource(product::create($request->all()));
    }

    public function show(product $product)
    {
        return new productResource($product);
    }


    public function edit(product $product)
    {
        return new productResource($product);
    }

    public function update(Request $request,product $product)
    {
        $product->update($request->all());
    }

    public function destroy(product $product)
    {
        $product->delete();
    }
}
