<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemrayController extends Controller
{
    public function index () {
        return view('pemray.index');
    }
}
