<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = User::all();
        return view('adminlogin.home', compact('infos'));
    }

    public function adminUpdate(Request $request)
    {
        $info = new Year;
        $info->year = $request["year"];
        $info->save();
        return redirect('admin/home');
    }

}
