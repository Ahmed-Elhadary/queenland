<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewProductController extends Controller
{
    public function index(){
        return view('frontend.pages.view_product');
    }
}
