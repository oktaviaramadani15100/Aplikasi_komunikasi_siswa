<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa(){
        $data = Siswa::with('guru')->get();
        return view('tampilan.index', compact('data'));
    }

    public function tampilkandatasiswa($id){
        $wali_kelas = guru::all();
        $data = Siswa::find($id);
        return view('tampilan.tampildatasiswa', compact('data', 'wali_kelas'));
    }

    public function updatedatasiswa(Request $request, $id){
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect('/siswa');
    }

    public function delete($id)
    {
        $data = Siswa::findorfail($id);
        $data->delete();
        return redirect()->route('siswa')->with('sukses', 'data berhasil delete');
    }

    public function formdetail($id){
        $wali_kelas = guru::all();
        $data = Siswa::find($id);
        return view('tampilan.detailsiswa', compact('data'));
    }
}



