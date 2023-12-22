<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
            'quantity' => $this->quantity,
            'sold' => $this->sold,
            'brand' => $this->brand,
            'images' => $this->images,
            'tag' => $this->tag,
            'color_id' => $this->color_id,
            'user_id' => $this->user_id,
            'totalRating' => $this->totalRating,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
