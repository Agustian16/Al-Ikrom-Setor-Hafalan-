<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
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
                return redirect('admin'); 
            }elseif (Auth::user()->role == "MUROBI"){
                return redirect('murobi');
            }elseif (Auth::user()->role == "MENTOR"){
                return redirect('mentor');
            }elseif (Auth::user()->role == "KEPSEK"){
                return redirect('kepsek');
            }elseif (Auth::user()->role == "PEMRAY"){
                return redirect('pemray');
            }elseif (Auth::user()->role == "ORTU"){
                return redirect('ortu');
            };
            return view('home');
        }
    }
}
