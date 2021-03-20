<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\People;
use App\Models\Modelbackend\Position;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allpeople')->with('peoples',People::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.addpeople')->with('peoples',Position::all());

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
            $image->move(public_path('/images/People/'), $image_name);
            $image=$image_name;
        }

        People::create([
            'position_id'=>$request->position_id,
            'ar_name'=>$request->ar_name,
            'en_name'=>$request->en_name,
            'ar_job_title'=>$request->ar_job_title,
            'en_job_title'=>$request->en_job_title,
            'ar_details'=>$request->ar_details,
            'en_details'=>$request->en_details,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'gmail'=>$request->gmail,
            'linkedin'=>$request->linkedin,
            'image'=>$image,
        ]);
        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peoples = People::find($id);
        $positions = Position::all();
        return view('dashboard.pages.editpeople')->with('peoples',$peoples)
        ->with('positions',$positions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $maincat = People::findOrFail($id);
        if($request->has('image')) {
            if ($request->hasFile('image')) {
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $p_image= $timestamp . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('/Images/People/'), $p_image);
                $maincat->update([
                    'image' => $p_image
                ]);
            }
        }

        $maincat->update([
            'position_id' => $request->position_id,
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'ar_details' => $request->ar_details,
            'en_details' => $request->en_details,
            'ar_job_title' => $request->ar_job_title,
            'en_job_title' => $request->en_job_title,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'gmail' => $request->gmail,
        ]);
        return redirect()->route('people.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        People::find($id)->delete();
        return redirect()->back();
    }
}
