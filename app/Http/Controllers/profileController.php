<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function profile()
    {
        // $datas = User::all();
        return view('profileEmployee');
    }
}