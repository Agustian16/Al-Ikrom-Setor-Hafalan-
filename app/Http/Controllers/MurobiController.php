<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murobi;

class MurobiController extends Controller
{
    public function index()
    {
        $data_murobi = Murobi::all();
        return view('murobi.index', ['data_murobi'=>$data_murobi]);
    }

    public function create(Request $request)
    {
        Murobi::create($request->except(['_token']));

        return redirect('/murobi')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $murobi = Murobi::find($id);
        return view('murobi/edit',['murobi'=> $murobi]);
    }

    public function update(Request $request, $id)
    {
        $murobi = Murobi::find($id);
        $murobi->update($request->all());
        return redirect('/murobi')->with('success', 'Data Berhasil di update');
    }

    public function delete($id)
    {
        $murobi = Murobi::find($id);
        $murobi -> delete($murobi);
        return redirect('/murobi')->with('success', 'Data Berhasil di Hapus');
    }
}
