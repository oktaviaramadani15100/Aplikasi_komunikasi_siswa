<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Laporan;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function getlaporan()
    {
       $laporan = Laporan::with(['siswa','pelanggaran'])->get();
       return view('tampilan.laporan', compact(['laporan']));
    }

    public function tambah_laporan()
    {
       $inidatasiswa = Siswa::all();
       $inidatapelanggaran = Pelanggaran::all();
       return view('tampilan.tambah_laporan', compact('inidatasiswa', 'inidatapelanggaran'));
    }

    public function insert_laporan(Request $request)
    {
        Laporan::create($request->all());
        return redirect('/getdatalaporan');
    }

    public function deletelaporan($id)
    {
        // dd($id);
        $laporan= Laporan::findorfail($id);
        $laporan->delete();
        return redirect('/getdatalaporan');
    }

}
