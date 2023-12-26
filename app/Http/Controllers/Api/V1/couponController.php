<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\Collection;
use App\Http\Resources\V1\couponResource;
use App\Models\coupon;
use Illuminate\Http\Request;

class couponController extends Controller
{
    public function index()
    {
        return coupon::all();
    }

    public function store(Request $request)
    {
        return new couponResource(coupon::create($request->all()));

    }

    public function show(coupon $coupon)
    {
        return new couponResource($coupon);
    }

    public function edit(coupon $coupon)
    {
        return new couponResource($coupon);
    }

    public function update(coupon $coupon)
    {
        $coupon->update();
    }

    public function destroy(coupon $coupon)
    {
        $coupon->delete();
    }
}
