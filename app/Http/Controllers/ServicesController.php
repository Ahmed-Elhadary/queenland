<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allservices')->with('services',Services::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.addservices');

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
        Services::create($input);
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services,$id)
    {
        $services = Services::find($id);
        return view('dashboard.pages.editservices')->with('services',$services);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services = Services::findOrFail($id);
        $services->update([
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'ar_details' => $request->ar_details,
            'en_details' => $request->en_details
        ]);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services,$id)
    {
        Services::find($id)->delete();
        return redirect()->back();
    }
}
