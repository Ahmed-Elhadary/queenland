<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=["ar_name","en_name","ar_details","en_details","image","main_category_id"];

    public function maincategory()
    {
        return $this->belongsTo("\App\Models\Modelbackend\MainCategory");
    }

}
