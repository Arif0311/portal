<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use DB;

class dataEmployeeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::all();
        return view('dataEmployee', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = new User;
        return view('createEmployee', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'fullname' => $request->fullname,
            'role' => $request->role,
            'position' => $request->position,
            'department' => $request->department,
            'username' => $request->username,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'addres' => $request->addres,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin
        ]);
        return redirect()->route('dataEmployee')->with('success', 'Insert Data Successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Start
    public function edit($id)
    {
        $datas = User::find($id);
        return view('EditDataEmployee', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = User::find($id);
        $datas->fullname = $request->fullname;
        $datas->role = $request->role;
        $datas->position = $request->position;
        $datas->department = $request->department;
        $datas->username = $request->username;
        $datas->email = $request->email;
        $datas->mobile_number = $request->mobile_number;
        $datas->addres = $request->addres;
        $datas->password = Hash::make($request->password);
        $datas->is_admin = $request->is_admin;
        $datas->save();
        return redirect()->route('dataEmployee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($request->all());
        $datas = User::find($id)->delete();
        return redirect()->route('dataEmployee');
    }
}
