<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable=["image","ar_name","en_name","ar_job_title",
                      "en_job_title","ar_details","en_details","facebook","twitter",
                        "instagram","gmail","linkedin","position_id"];


public function position()
{
    return $this->belongsTo("\App\Models\Modelbackend\Position");
}
}

