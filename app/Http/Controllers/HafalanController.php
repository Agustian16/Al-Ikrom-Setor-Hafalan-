<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hafalan;

class HafalanController extends Controller
{
    public function index()
    {
        return view('hafalans.index');
    }

    public function create()
    {
        $hafalans = Hafalan::all();
        // return view('hafalan.index', compact('hafalans'));
        dd('$hafalans');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_santri' => 'required',
            'surah_awal' => 'required',
            'ayat_awal' => 'required',
            'surah_akhir' => 'required',
            'ayat_akhir' => 'required',
            'keterangan' => 'required',
            'hasil' => 'required',
        ]);
  
        Hafalan::create($request->all());
  
        return redirect('hafalan')
                        ->with('success','Hafalan created successfully.');
    }

}
