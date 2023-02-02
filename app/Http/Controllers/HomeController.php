<?php

namespace App\Http\Controllers;

use App\Models\index;
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

    // public function __construct()
    // {
    //     $this->index = new index();
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


      
        return view('front.f_index',);
    }
    }

