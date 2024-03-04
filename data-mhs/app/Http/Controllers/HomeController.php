<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function mahasiswa()
    {
        return view('mahasiswa.mahasiswa');
    }

    public function provinsi()
    {
        $prov = DB::table('provinsis')->get();
        // return $prov;
        return view('provinsi.provinsi', ['provinsis' => $prov]);
    }

    // public function kabupaten()
    // {
    //     $kab = DB::table('kabupatens')->get();
    //     return view('kabupaten.kabupaten', ['kabupatens' => $kab]);
    // }

    public function kecamatan()
    {
        return view('kecamatan.kecamatan');
    }

    public function riwayatpendidikan()
    {
        return view('main');
    }


}
