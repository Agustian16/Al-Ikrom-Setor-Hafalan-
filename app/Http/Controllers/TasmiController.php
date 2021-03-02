<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasmiController extends Controller
{
    public function index () {
        return view('tasmi.index');
    }
}
