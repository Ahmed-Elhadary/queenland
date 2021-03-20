<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.all_admin')->with('admins',User::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.pages.add_admin');

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
     * @param  \App\Models\Modelbackend\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = User::find($id);
        // Load user/createOrUpdate.blade.php view
        return View('dashboard.pages.edit_admin')->with('admins', $admins);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Admin  $admin
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $admin_data = User::findOrFail($id);
        $admin_data->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            // 'password_confirmation' => $request->password_confirmation,

        ]);


        return redirect()->route('admin.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
