<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function index() {
        return view('ortu.index');
    }
}
