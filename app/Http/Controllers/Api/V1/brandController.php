<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\brandResource;
use App\Http\Resources\V1\Collection;
use App\Models\brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function index()
    {
        return new Collection(brand::all());
    }

    public function store(Request $request)
    {
       return new brandResource($request->all());
    }

    public function show(brand $brand)
    {
        return new brandResource($brand);
    }

    public function edit(brand $brand)
    {
        return new brandResource($brand);
    }

    public function update(brand $brand)
    {
        $brand->update();
    }

    public function destroy(brand $brand)
    {
        $brand->delete();
    }
}
