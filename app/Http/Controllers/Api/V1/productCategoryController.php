<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Collection;
use App\Http\Resources\V1\productCategoryCollection;
use App\Http\Resources\V1\productCategoryResource;
use App\Http\Resources\V1\productResource;
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
        return productCategory::all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new productCategoryResource(productCategory::create($request->all()));
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
