<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index(){
        
        return view('frontend.pages.faq');
    }
}