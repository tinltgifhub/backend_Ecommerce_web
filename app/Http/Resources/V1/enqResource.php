<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class enqResource extends JsonResource
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

            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'comment' => $this->comment,
            'status' => $this->status,
        ];
    }
}
