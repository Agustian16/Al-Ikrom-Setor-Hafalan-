<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class KepsekController extends Controller
{
    public function index () {
        $santris = Santri::all();
        return view('kepsek.index',compact('santris'));
    }
}
