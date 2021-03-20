<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\AboutCompany;
use Illuminate\Http\Request;

class AboutCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
        return view('dashboard.pages.all_aboutcompany')->with('about_company',AboutCompany::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function show(AboutCompany $aboutCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutCompany $aboutCompany,$id)
    {
        $about_company = AboutCompany::find($id);
        return view('dashboard.pages.edit_aboutcompany')->with('about_company',$about_company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about_company = AboutCompany::findOrFail($id);
        $about_company->update([
            'image' => $request->image,
            'ar_year' => $request->ar_year,
            'en_year' => $request->en_year,
            'ar_company_name' => $request->ar_company_name,
            'en_company_name' => $request->en_company_name,
            'ar_details' => $request->ar_details,
            'en_details' => $request->en_details
        ]);
        return redirect()->route('aboutcompany.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\AboutCompany  $aboutCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutCompany::find($id)->delete();
        return redirect()->back();
    }
}
