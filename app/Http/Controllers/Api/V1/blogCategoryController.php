<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\blogCategoryResource;
use App\Http\Resources\V1\Collection;
use App\Models\blogCategory;
use Illuminate\Http\Request;

class blogCategoryController extends Controller
{
    public function index()
    {
        return new Collection(blogCategory::all());
    }

    public function store(Request $request)
    {
       return new blogCategoryResource($request->all());
    }

    public function show(blogCategory $blogCategory)
    {
        return new blogCategoryResource($blogCategory);
    }

    public function edit(blogCategory $blogCategory)
    {
        return new blogCategoryResource($blogCategory);
    }

    public function update(blogCategory $blogCategory)
    {
        $blogCategory->update();
    }

    public function destroy(blogCategory $blogCategory)
    {
        $blogCategory->delete();
    }
}
