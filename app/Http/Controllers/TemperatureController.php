<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Temperature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TemperatureController extends Controller
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
        $datas = Temperature::all()->latest();
        return view('TemperatureTracking', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = new Temperature;
        return view('CreateTemperature', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('temperatures')->insert([
            'user_id' => Auth::id(),
            'fullname' => $request->fullname,
            'username' => $request->username,
            'temperature' => $request->temperature,
            'inputDate' => $request->inputDate,
        ]);
        return redirect()->route('temperature')->with('success', 'Insert Data Successfully!');
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
    public function edit($id)
    {
        $datas = Temperature::find($id);
        return view('EditTemperature', compact('datas'));
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
        $datas = Temperature::find($id);
        $datas->fullname = $request->fullname;
        $datas->username = $request->username;
        $datas->temperature = $request->temperature;
        $datas->inputDate = $request->inputDate;
        $datas->save();

        return redirect()->route('temperature');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Temperature::find($id)->delete();
        return redirect()->route('temperature');
    }
}
