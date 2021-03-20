<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable=["en_question","ar_question","en_answer","ar_answer"];

}
