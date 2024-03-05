<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function addProvinsi()
    {
        return view('provinsi.add');
    }

    public function store (Request $request)
    {
        $validateData = $request->validate ([
            'nama_provinsi'     =>  'required|min:3|max:50',
        ]);

        $dataprovinsi = new Provinsi();
        $dataprovinsi -> nama_provinsi = $validateData['nama_provinsi'];
        $dataprovinsi -> save();
        $request->session()->flash('pesan', 'Provinsi berhasil ditambahkan');
        return redirect()->route('provinsi.provinsi');
    }

    public function edit($id)
    {
        $result = Provinsi::findOrFail($id);
        return view('provinsi.edit', ['provinsi' => $result]);
    }

    public function update(Request $request, Provinsi $provinsi)
    {
        $validateData = $request->validate ([
            'nama_provinsi'     =>  'required|min:3|max:50',
        ]);

        $provinsi -> nama_provinsi = $validateData['nama_provinsi'];
        $provinsi -> save();
        $request  -> session()->flash('pesan', 'Provinsi berhasil di edit');
        return redirect()->route('provinsi.provinsi', ['provinsi' => $provinsi -> id]);
    }

    public function delete($id)
    {
        DB::table('provinsis')->where('id', $id)->delete();
        return redirect('provinsi')->with('pesan', 'Data berhasil dihapus');
    }
}


