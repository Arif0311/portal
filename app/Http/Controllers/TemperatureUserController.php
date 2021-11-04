<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Temperature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TemperatureUserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function index()
    {
        $datas = Temperature::where('user_id', Auth::id())->get()->latest();
        return view('user.TemperatureUser', compact ('datas'));
    }
    public function create()
    {
        $datas = new Temperature;
        return view('user.CreateTempUser', compact('datas'));
    }
    public function store(Request $request)
    {
        DB::table('temperatures')->insert([
            'user_id' => Auth::id(),
            'fullname' => $request->fullname,
            'username' => $request->username,
            'temperature' => $request->temperature,
            'inputDate' => $request->inputDate,
        ]);
        return redirect()->route('temperatureUser')->with('success', 'Input Temperature Successfully!');
    }
}