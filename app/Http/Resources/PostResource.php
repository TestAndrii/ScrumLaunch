<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($reques);
        PostResource::withoutWrapping();
        return $this->resource->map(function($item){
            return [
                'id' => $item->id,
                'title' => $item->title,
                'description' => $item->description,
                'user_name' => $item->user->name,
                'comments' => CommentResource::collection($item->comments),
            ];
        });
    }
}
