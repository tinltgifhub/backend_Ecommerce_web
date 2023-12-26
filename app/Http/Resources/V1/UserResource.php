<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'mobile'=>$this->mobile,
            'role'=>$this->role,
            'isBlock'=>$this->isBlock,
            'cart'=>$this->cart,
            'address'=>$this->address,
            'wishlist'=>$this->wishlist,
            'refreshToken'=>$this->refreshToken,
        ];
    }
}
