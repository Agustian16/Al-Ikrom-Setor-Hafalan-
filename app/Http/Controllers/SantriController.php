<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function index()
    {
        $data_santri = Santri::all();
        return view('santri.index',['data_santri' => $data_santri]);
    }
    public function create(Request $request)
    {
    	Santri::create($request->except(['_token']));
    	
    	return redirect('/santri')->with('sukses','Data Berhasil Di input');
    }

    public function edit($nis)
    {
    	$santri = Santri::where('nis', $nis)->first();
    	return view('santri/edit',['santri'=> $santri]); 
    }

    public function update(Request $request, $nis)
    {   
    	$santri = Santri::where('nis', $nis);
    	$santri->update($request->all());
    	return redirect('/santri')->with('sukses','Data Berhasil Di update');
    }

    public function delete($nis)
    {
    	$santri = Santri::where('nis', $nis);
        $santri -> delete($santri);
        return redirect('/santri')->with ('sukses', 'Data Berhasil Di Hapus');  
    }

}
