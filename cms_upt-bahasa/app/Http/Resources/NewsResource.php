<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // [
        //     "id_news"=> $this->id_news,
        //     "headline_news"=> $this->headline_news,
        //     "description_news"=> $this->description_news,
        //     "picture"=> $this->picture,
        //     "author"=> $this->author,
        //     "created_at"=> $this->create_at->diffForHumans(),
        //     "updated_at"=> $this->updated_at->diffForHumans()
        // ];
    }
}
