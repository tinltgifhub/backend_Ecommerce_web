<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Http\Resources\V1\Collection;
use App\Http\Resources\V1\enqResource;
use App\Models\enq;
use Database\Factories\enqFactory;
use Illuminate\Http\Request;

class enqController extends Controller
{
    public function index()
    {
        return enq::all();
    }

    public function store(Request $request)
    {
        return new enqResource(enq::create($request->all()));
    }

    public function show(enq $enq)
    {
        return new enqResource($enq);
    }

    public function edit(enq $enq)
    {
        return new enqResource($enq);
    }

    public function update(enq $enq)
    {
        $enq->update();
    }

    public function destroy(enq $enq)
    {
        $enq->delete();
    }
}
