<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data = guru::all();
        return view('tampilan.guru', compact('data'));
    }

    public function tambah_guru()
    {
        return view('tampilan.tambah_guru');
    }

    public function formguru(Request $request)
    {
        $data = guru::create($request->all());
        return redirect('/guru');
    }

    public function tampilkandataguru($id)
    {
        $data = guru::find($id);
        return view('tampilan.tampildataguru', compact('data'));
    }

    public function updatedataguru(Request $request, $id)
    {
        $data = guru::find($id);
        $data->update($request->all());
        return redirect('/guru');
    }

    public function delete($id)
    {
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru')->with('sukses', 'data telah dihapus');
    }

    public function detailguru($id)
    {
        $wali_kelas = Siswa::all();
        $data = guru::find($id);
        return view('tampilan.detailguru', compact('data'));
    }
}
