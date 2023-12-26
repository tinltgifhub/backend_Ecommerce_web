<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class orderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            '_id'=>$this->_id,
            'user' => $this->user,
            'orderItems' => $this->orderItems,
            'shippingInfo' => $this->shippingInfo,
            'totalPrice' => $this->totalPrice,
            'totalPriceAfterDiscount' => $this->totalPriceAfterDiscount,
            'orderStatus' => $this->orderStatus,
        ];
    }
}
