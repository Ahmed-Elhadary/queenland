<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allposition')->with('positions',Position::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.addposition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Position::create([
            'title'=>$request->title
        ]);
        return redirect()->route('positions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positions = Position::find($id);
        return view('dashboard.pages.editposition')->with('positions',$positions);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $pos = Position::findOrFail($id);
        $pos->update([
            'title' => $request->title
        ]);
        // Toastr::success(trans("site.product_success_edit"),trans("site.success"));
        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Position::find($id)->delete();
        return redirect()->back();
    }
}
