<?php

namespace App\Http\Controllers;
use App\Models\Pelanggaran;

use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function datapelanggaran(){
        $data = Pelanggaran::all();
        return view('tampilan.pelanggaran', compact('data'));
    }

    public function tambah_pelanggaran(){
        return view('tampilan.tambah-pelanggaran');
    }

    public function insertpelanggaran(Request $request)
    {
        $data = Pelanggaran::create($request->all());
        return redirect('/datapelanggaran');
    }

    public function tampilkandatapelanggaran($id)
    {
        $data = Pelanggaran::find($id);
        return view('tampilan.tampildatapelanggaran', compact('data'));
    }

    public function updatedatapelanggaran(Request $request, $id)
    {
        $data = Pelanggaran ::find($id);
        $data->update($request->all());
        return redirect('/datapelanggaran');
    }

    public function delete($id)
    {
        $data = Pelanggaran::find($id);
        $data->delete();
        return redirect()->route('datapelanggaran')->with('sukses', 'data berhasil delete');
    }
}
