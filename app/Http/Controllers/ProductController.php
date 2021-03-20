<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\MainCategory;
use App\Models\Modelbackend\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allproducts')->with('products',Product::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.addproduct')->with('mainCategories',MainCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $image= null;
        if($request->hasFile('image')) {
            $image =  $request->image;
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $image_name = $timestamp . $image-> getClientOriginalName();
            $image->move(public_path('/images/Products/'), $image_name);
            $image=$image_name;
        }


        Product::create([
            'main_category_id'=>$request->main_category_id,
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'ar_details'=>$request->ar_details,
            'en_details'=>$request->en_details,
            'image' => $image
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $mainCategories = MainCategory::all();
        return view('dashboard.pages.editproduct')->with('products',$products)
        ->with('mainCategories',$mainCategories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $maincat = Product::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/images/Products/'), $p_image);
                $maincat->update([
                    'image' => $p_image
                ]);
            }
        }

        $maincat->update([
            'main_category_id'=>$request->main_category_id,
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'ar_details' => $request->ar_details,
            'en_details' => $request->en_details,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
