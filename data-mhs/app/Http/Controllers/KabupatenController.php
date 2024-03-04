<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kabupaten;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index()
    {
        $kabupatens = Kabupaten::all();
        return view('kabupaten.kabupaten', compact('kabupatens'));
    }

    public function addKabupaten()
    {
        $provinsis = Provinsi::all();
        return view('kabupaten.add', compact('provinsis'));
    }

    public function store (Request $request)
    {
        $validateData = $request->validate ([
            'prov_id'         =>  'required',
            'nama_kabupaten'  =>  'required|min:3|max:50',
        ]);

        $datakabupaten = new Kabupaten();
        $datakabupaten -> prov_id = $validateData['prov_id'];
        $datakabupaten -> nama_kabupaten = $validateData['nama_kabupaten'];
        $datakabupaten -> save();
        $request->session()->flash('pesan', 'Provinsi berhasil ditambahkan');
        return redirect()->route('kabupaten.kabupaten');
    }

    public function edit(Kabupaten $kabupaten)
    {
        $provinsis = Provinsi::all();
        return view('kabupaten.edit', compact('kabupaten', 'provinsis'));
    }

    public function update(Request $request, Kabupaten $kabupaten)
    {
        $validateData = $request->validate ([
            'prov_id'           =>  'required',
            'nama_kabupaten'    =>  'required|min:3|max:50',
        ]);

        $kabupaten -> prov_id        = $validateData['prov_id'];
        $kabupaten -> nama_kabupaten = $validateData['nama_kabupaten'];
        $kabupaten -> save();
        $request   -> session()->flash('pesan', 'Kabupaten berhasil di edit');
        return redirect()->route('kabupaten.kabupaten', ['kabupaten' => $kabupaten -> id]);
    }
}
