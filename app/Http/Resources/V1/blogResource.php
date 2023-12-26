<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class  blogResource extends JsonResource
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

            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'numviews' => $this->numViews,
            'isliked' => $this->isLiked,
            'isdisliked' => $this->isDisliked,            
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'author' => $this->author,  
            'images' => $this->images,  
        ];
    }
}
