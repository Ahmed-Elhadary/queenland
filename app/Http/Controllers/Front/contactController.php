<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }
}
