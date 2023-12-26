<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\Collection;
use App\Http\Resources\V1\colorResource;
use App\Models\color;
use Illuminate\Http\Request;

class colorController extends Controller
{
    public function index()
    {
        return color::all();
    }

    public function store(Request $request)
    {
        // $a=new color();
        // $a->_id=$request->_id;
        // $a->colorCode= $request->colorCode;
        // $a->title=$request->title;
        // $a->save();
        // return $a;
        return new colorResource(color::create($request->all()));

    }

    public function show(color $color)
    {
        return new colorResource($color);
    }

    public function edit(color $color)
    {
        return new colorResource($color);
    }

    public function update(color $color)
    {
        $color->update();
    }

    public function destroy(color $color)
    {
        $color->delete();
    }
}
