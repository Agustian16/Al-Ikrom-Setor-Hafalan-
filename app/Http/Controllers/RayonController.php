<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    public function index()
    {
        $data_rayon = rayon::all();
        return view('rayon.index', ['data_rayon'=>$data_rayon]);
    }

    public function create(Request $request)
    {
        Rayon::create($request->except(['_token']));

        return redirect('/rayon')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $rayon = Rayon::find($id);
        return view('rayon/edit',['rayon'=> $rayon]);
    }

    public function update(Request $request, $id)
    {
        $rayon = Rayon::find($id);
        $rayon->update($request->all());
        return redirect('/rayon')->with('success', 'Data Berhasil di update');
    }

    public function delete($id)
    {
        $rayon = Rayon::find($id);
        $rayon -> delete($rayon);
        return redirect('/rayon')->with('success', 'Data Berhasil di Hapus');
    }
}
