<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\CompanyDate;
use Illuminate\Http\Request;

class CompanyDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allcompany_date')->with('company',CompanyDate::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.addcompany_date');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        CompanyDate::create($input);
        return redirect()->route('company_date.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\CompanyDate  $companyDate
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyDate $companyDate)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\CompanyDate  $companyDate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company_date = CompanyDate::find($id);

        return view('dashboard.pages.editcompany_date')->with('company_date',$company_date);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\CompanyDate  $companyDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $company_date = CompanyDate::findOrFail($id);
        $company_date->update([
            'company_date' => $request->company_date,
            'ar_title' => $request->ar_title,
            'en_title' => $request->en_title,
            'ar_details' => $request->ar_details,
            'en_details' => $request->en_details,

        ]);


        return redirect()->route('company_date.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\CompanyDate  $companyDate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyDate::find($id)->delete();
        return redirect()->back();
    }
}
