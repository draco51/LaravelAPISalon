<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\FreelancerProfile;

class Qualitification extends Model
{
    public function freelancerProfile()
    {
        return $this->belongsTo(FreelancerProfile::class,'Fid');
    }
}
