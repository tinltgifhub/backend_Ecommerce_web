<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Collection;
use App\Http\Resources\V1\productCategoryResource;
use App\Models\product;
use App\Models\productCategory;
use Illuminate\Http\Request;

class productCategoryController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new Collection(productCategory::all());
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return new productCategoryResource(productCategory::created($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(productCategory $productCategory)
    {
        return new productCategoryResource($productCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(productCategory $productCategory)
    {
        return new productCategoryResource($productCategory);
    }


    public function update(Request $request, productCategory $productCategory)
    {
        return $productCategory->update($request->all());
    }

    public function destroy(productCategory $productCategory)
    {
        return $productCategory->delete();
    }
}
