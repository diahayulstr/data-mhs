<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{
    public function kecamatan()
    {
        $kec = DB::table('kecamatans')->get();
        return view('kecamatan.kecamatan', ['kecamatans' => $kec]);
    }

    // public function addKecamatan()
    // {
    //     $provinsis = Provinsi::all();
    //     $prov_id = 1; // Contoh ID provinsi yang ingin Anda gunakan
    //     $kabupatens = Kabupaten::where('prov_id', $prov_id)->get();
    //     return view('kecamatan.add', compact('provinsis', 'kabupatens'));
    // }

    public function addKecamatan(Request $request)
    {
        $provinsis = Provinsi::all();
        $prov_id = $request->input('prov_id');
        $kabupatens = Kabupaten::where('prov_id', $prov_id)->get();
        return view('kecamatan.add', compact('provinsis', 'kabupatens'));
    }
}
