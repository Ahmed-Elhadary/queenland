<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\MainCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allcategory')->with('categories',MainCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.add_maincategory');

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
            $image->move(public_path('/images/Main_Category/'), $image_name);
            $image=$image_name;
        }
        $mCat = MainCategory::create([
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'image' => $image
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = MainCategory::find($id);
        return view('dashboard.pages.edit_maincategory')->with('categories',$categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $maincat = MainCategory::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/images/Main_Category/'), $p_image);
                $maincat->update([
                    'image' => $p_image
                ]);
            }
        }

        $maincat->update([
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name
        ]);
        // Toastr::success(trans("site.product_success_edit"),trans("site.success"));
        return redirect()->route('maincategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\MainCategory  $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $mainCategory,$id)
    {
        MainCategory::find($id)->delete();
        return redirect()->back();
    }
}
