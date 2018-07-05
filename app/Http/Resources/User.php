<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'id' => $this->id,
            'Name' => $this->name,
            'Email' => $this->email,
            'Creation Date' => $this->created_at->toDateString(),
            'Updation Date' => $this->updated_at->toDateString(),
        ];
    }
}
