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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'order_items' => json_decode($this->order_items),
            'shipping_info' => json_decode($this->shipping_info),
            'total_price' => $this->total_price,
            'total_price_after_discount' => $this->total_price_after_discount,
            'order_status' => $this->order_status,
        ];
    }
}
