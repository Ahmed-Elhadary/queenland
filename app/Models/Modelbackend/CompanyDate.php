<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDate extends Model
{
    use HasFactory;
    protected $fillable=["company_date","ar_title","en_title","ar_details","en_details"];

}
