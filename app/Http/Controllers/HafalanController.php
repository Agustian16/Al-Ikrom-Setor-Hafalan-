<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HafalanController extends Controller
{
    public function index()
    {
        return view('hafalans.index');
    }
}
