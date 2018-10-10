<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function freelancerProfile()
    {
        return $this->belongsTo(FreelancerProfile::class,'Fid');
    }
}
