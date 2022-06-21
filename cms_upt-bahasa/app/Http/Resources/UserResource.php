<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "created_at" => $this->created_at->diffForHumans(),
            "updated_at" => $this->updated_at,
            "gender" => $this->gender,
            "place_of_birth" => $this->place_of_birth,
            "date_of_birth" => $this->date_of_birth,
            "last_education" => $this->last_education,
            "phone" => $this->phone,
            "address" => $this->address,
            "pas_photo" => $this->pas_photo,
            "identity_card" => $this->identity_card,
            "roles" => $this->roles,
        ];
    }
}
