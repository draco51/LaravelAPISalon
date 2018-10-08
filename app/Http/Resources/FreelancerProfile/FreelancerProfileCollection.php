<?php

namespace App\Http\Resources\FreelancerProfile;

use Illuminate\Http\Resources\Json\Resource;

class FreelancerProfileCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'name' => $this->name,
            'location' => $this->location,
            'hourRate' => $this->hourRate,
            'rating' => $this->rating,
//            'href' => [
//                'link' => route('stylists.show', $this->id)
//            ]

        ];
    }
}
