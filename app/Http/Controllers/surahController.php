<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class surahController extends Controller
{
    public function index () {

    $surahs = DB::table('table_surah')->get();
    return view('admin.surah', compact('surahs'));
    }
}
