<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\People;
use App\Models\Modelbackend\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.pages.index')->with('product',Product::all())
        ->with('people',People::all());
    }
}
