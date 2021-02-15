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
        {
            if(Auth::user()->role == "ADMIN"){
                return redirect('admin.index'); //Mending pake redirect jangan pake view
            }elseif (Auth::user()->role == "MUROBI"){
                return redirect('murobi.index');
            }elseif (Auth::user()->role == "MENTOR"){
                return redirect('mentor.index');
            }elseif (Auth::user()->role == "KEPSEK"){
                return redirect('kepsek.index');
            }elseif (Auth::user()->role == "PEMRAY"){
                return redirect('pemray.index');
            }elseif (Auth::user()->role == "ORTU"){
                return redirect('ortu.index');
            };
            return view('home');
        }
    }
}
