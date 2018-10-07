<?php

namespace App\Http\Resources\FreelancerProfile;

use Illuminate\Http\Resources\Json\Resource;

class FreelancerProfileResource extends Resource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'hourRate' => $this->hourRate,
            'profileTitle' => $this->profileTitle,
            'rating' => $this->rating,
//            'Skills' => [
//                'skills' => new FreelancerProfileCollection($this->skills),
//            ]
        ];
    }



}
