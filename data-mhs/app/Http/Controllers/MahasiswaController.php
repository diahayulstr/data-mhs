<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\RiwayatPendidikan;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mhs = DB::table('mahasiswa')->get();
        // return $prov;
        return view('mahasiswa.mahasiswa', ['mahasiswa' => $mhs]);
    }

    public function addMahasiswa()
    {
        return view('mahasiswa.add');
    }

    public function store (Request $request)
    {
        $validateData = $request->validate ([
            'nama'      =>  'required|min:3|max:50',
            'nim'       =>  'required',
            'prodi'     =>  'required',
            'tgl_lahir' =>  'required',
            'alamat'    =>  'required',
        ]);

        $mahasiswas = new Mahasiswa();
        $mahasiswas -> nama      = $validateData['nama'];
        $mahasiswas -> nim       = $validateData['nim'];
        $mahasiswas -> prodi     = $validateData['prodi'];
        $mahasiswas -> tgl_lahir = $validateData['tgl_lahir'];
        $mahasiswas -> alamat    = $validateData['alamat'];
        $mahasiswas -> save();
        $request->session()->flash('pesan', 'Data berhasil ditambahkan');
        return redirect()->route('mahasiswa.mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $riwayat_pendidikan = RiwayatPendidikan::where('mhs_id', $id)->get();
        return view('mahasiswa.edit', compact(
            'mahasiswa', 'riwayat_pendidikan'
        ));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate ([
            'nama'      =>  'required|min:3|max:50',
            'nim'       =>  'required',
            'prodi'     =>  'required',
            'tgl_lahir' =>  'required',
            'alamat'    =>  'required',
        ]);

        $mahasiswa -> nama      = $validateData['nama'];
        $mahasiswa -> nim       = $validateData['nim'];
        $mahasiswa -> prodi     = $validateData['prodi'];
        $mahasiswa -> tgl_lahir = $validateData['tgl_lahir'];
        $mahasiswa -> alamat    = $validateData['alamat'];
        $mahasiswa -> save();
        $request  -> session()->flash('pesan', 'Mahasiswa berhasil di edit');
        return redirect()->route('mahasiswa.mahasiswa', ['mahasiswa' => $mahasiswa -> id]);
    }

    public function store_riwayat(Request $request, $id)
    {
        $riwayat = new RiwayatPendidikan;

        if(strlen($request->riwayat_id)>0){
            $riwayat = RiwayatPendidikan::find($request->riwayat_id);
        }

        $riwayat->mhs_id = $id;
        $riwayat->nama_sekolah = $request->nama_sekolah;
        $riwayat->tahun_masuk = $request->tahun_masuk;
        $riwayat->tahun_keluar = $request->tahun_keluar;
        $riwayat->nilai_akhir = $request->nilai_akhir;

        $riwayat->save();

        return redirect('mahasiswa/'.$id.'/edit')->with('success', "Data berhasil diperbaharui");
    }

    public function destroy_riwayat ($id, $mhs_id)
    {
        $riwayat = RiwayatPendidikan::find($id);
        $riwayat -> delete();
        return redirect('mahasiswa/'.$mhs_id.'/edit');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return redirect('mahasiswa')->with('error', 'Mahasiswa tidak ditemukan');
        }

        // Hapus data riwayat pendidikan yang terkait
        RiwayatPendidikan::where('mhs_id', $id)->delete();
        $mahasiswa->delete();
        return redirect('mahasiswa')->with('status', 'Data berhasil dihapus');
    }

    // public function destroy ($id, $mhs_id)
    // {
    //     DB::table('mahasiswa')->where('id', $id)->delete();
    //     DB::table('riwayat_pendidikan')->where('mhs_id', $mhs_id)->delete();

    //     return redirect('mahasiswa')->with('status', 'Data berhasil dihapus!');

    //     // $mahasiswa  = Mahasiswa::find($id);
    //     // $mahasiswa -> delete();
    //     // return redirect('mahasiswa');
    // }


}
