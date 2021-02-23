<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index()
    {
        $data_mapel = mapel::all();
        return view('mapel.index', ['data_mapel'=>$data_mapel]);
    }

    public function create(Request $request)
    {
        Mapel::create($request->except(['_token']));

        return redirect('/mapel')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view('mapel/edit',['mapel'=> $mapel]);
    }

    public function update(Request $request, $id)
    {
        $mapel = Mapel::find($id);
        $mapel->update($request->all());
        return redirect('/mapel')->with('success', 'Data Berhasil di update');
    }

    public function delete($id)
    {
        $mapel = Mapel::find($id);
        $mapel -> delete($mapel);
        return redirect('/mapel')->with('success', 'Data Berhasil di Hapus');
    }
}
