<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaC extends Controller
{
    public function index ()
    {
        $peserta = Peserta::all();
        return view('pages.peserta', compact('peserta'));
    }
    public function create()
    {
        $kelas = Kelas::all();
        return view('crud.insert', compact('kelas'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|unique:peserta,nis',
            'namalengkap' => 'required',
            'jk' => 'required|in:L,P',
            'kelas_id' => 'required',
            'tgllahir' => 'required|date',
            'nilai_web' => 'required|numeric',
            'nilai_pbo' => 'required|numeric',
            'nilai_db' => 'required|numeric',

        ]);

        Peserta::create($validatedData);

        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil ditambahkan.');
    }
    
    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();

        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil dihapus.');
    }

    public function edit($id)
    {
    $peserta = Peserta::findOrFail($id);
    $kelasList = Kelas::pluck('nama_kelas', 'id');
    return view('crud.update', compact('peserta', 'kelasList'));
    }

    public function update(Request $request, $id)
    {
    $peserta = Peserta::findOrFail($id);
    
    $peserta->update([
        'nis' => $request->nis,
        'namalengkap' => $request->namalengkap,
        'jk' =>$request->jk ,
        'kelas_id' =>$request->kelas ,
        'tgllahir' =>$request->tgllahir,
        'nilai_web' =>$request->nilai_web,
        'nilai_pbo' =>$request->nilai_pbo,
        'nilai_db' =>$request->nilai_db,
    ]);

    return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil diperbarui.');    
    }
}
