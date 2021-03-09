<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index () {
        return view('admin.index');
    }
    
    public function santri () {
        return view('admin.santri');
    }
    public function createtasmi(Request $request)
    {
        Rayon::create($request->except(['_token']));

        return redirect('/admin/index')->with('success', 'Data berhasil diinput');
    }
    public function createsantri(Request $request)
    {
        Rayon::create($request->except(['_token']));

        return redirect('/admin/index')->with('success', 'Data berhasil diinput');
    }
}
