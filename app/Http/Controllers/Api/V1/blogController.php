<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\blogResource;
use App\Http\Resources\V1\Collection;
use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        return new Collection(blog::all());
    }

    public function store(Request $request)
    {
       return new blogResource($request->all());
    }

    public function show(blog $blog)
    {
        return new blogResource($blog);
    }

    public function edit(blog $blog)
    {
        return new blogResource($blog);
    }

    public function update(blog $blog)
    {
        $blog->update();
    }

    public function destroy(blog $blog)
    {
        $blog->delete();
    }
}
