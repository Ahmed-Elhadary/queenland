<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelbackend\MainCategory;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index($id){
        $mainCategory = MainCategory::find($id);
        $products= $mainCategory->products()->paginate(8);
        return view('frontend.pages.products',compact('products'));
    }
}
