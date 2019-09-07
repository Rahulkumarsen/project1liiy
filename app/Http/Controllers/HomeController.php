<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function myTimesheet(){
        return view('my_lily.timesheet');
    }

    public function profile()
    {
     return view('home.profile');            
    }

    public function admin()
    {
     return view('admin.admin');            
    }
}
