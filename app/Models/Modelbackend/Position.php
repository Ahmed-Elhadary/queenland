<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable=["title"];

public function people()
{
    return $this->hasMany("\App\Models\Modelbackend\People");
}
}
