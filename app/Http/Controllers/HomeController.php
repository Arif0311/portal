<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\User;
use App\Models\Temperature;
use App\Models\VisitorForm;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function halamanHome()
    {
        $totalUser = User::count();
        $todayEmployee = DB::table('users')
                        ->whereDate('created_at', '=', Carbon::today()->toDateString())
                        ->count();
        $totalTemperature = Temperature::count();
        $todayTemperature = DB::table('temperatures')
                        ->whereDate('inputDate', '=', Carbon::today()->toDateString())
                        ->count();
        $totalVisitor = VisitorForm::count();
        $todayVisitor = DB::table('visitor_forms')
                        ->whereDate('date_in_visitor', '=', Carbon::today()->toDateString())
                        ->count();
        return view('index', compact('totalUser','totalTemperature','totalVisitor','todayVisitor','todayTemperature','todayEmployee'));
    }
}
