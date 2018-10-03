<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function FreelancerProfile()
    {
        return $this->belongsTo(FreelancerProfile::class);
    }
}
