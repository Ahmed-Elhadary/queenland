<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;

    protected $fillable=["image","ar_year","en_year","ar_company_name","en_company_name","ar_details","en_details"];
}
