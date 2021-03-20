<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $fillable=["ar_name","en_name","image"];

    public function products()
    {
        return $this->hasMany("\App\Models\Modelbackend\Product");
    }
}
