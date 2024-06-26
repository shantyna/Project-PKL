<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pegawai.index');
    }

    public function penjadwalan() {
        return view ('pegawai.penjadwalan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Pegawai::all();

        return view('pegawai.input_pegawai');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Pegawai;

        $request->validate([
            'nip' => 'required|integer|unique:pegawais',
            'nama_pegawai' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        // Membuat instance User baru
        $data = new Pegawai();

        // Menyimpan data yang telah divalidasi
        $data->nip = $request->nip;
        $data->nama_pegawai = $request->nama_pegawai;
        $data->jabatan = $request->jabatan;

        // Menyimpan data ke database
        $data->save();

        // Menampilkan notifikasi sukses
        Alert::success('Sukses', 'Data Berhasil Ditambahkan');

        // Mengarahkan kembali ke halaman sebelumnya
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pegawai::find($id);

        $data -> delete();
        
        return redirect()->back();
    }
}
