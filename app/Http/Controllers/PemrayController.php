<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class PemrayController extends Controller
{
    public function index () {
        $santris = Santri::all();
        return view('pemray.index',compact('santris'));
    }
}
