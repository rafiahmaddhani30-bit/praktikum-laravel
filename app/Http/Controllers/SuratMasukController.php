<?php

namespace App\Http\Controllers;

use App\Models\IncomingLetter;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    // Menampilkan daftar surat masuk
    public function index()
    {
        $suratMasuk = IncomingLetter::orderBy('id', 'asc')->get();

        return view('surat-masuk.index', compact('suratMasuk'));
    }

    // Menampilkan halaman tambah surat
    public function create()
    {
        return view('surat-masuk.create');
    }

    // Menyimpan surat baru
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nomor_surat' => 'required|string|max:225',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:225',
            'perihal' => 'required|string|max:225',
            'keterangan' => 'nullable|string',
        ]);

        IncomingLetter::create($validate);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil ditambahkan.');
    }

    // Menampilkan detail surat
    public function show($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.show', compact('surat'));
    }

    // Menampilkan halaman edit
    public function edit($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.edit', compact('surat'));
    }

    // Memperbarui data surat
    public function update(Request $request, $id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $validate = $request->validate([
            'nomor_surat' => 'required|string|max:225',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:225',
            'perihal' => 'required|string|max:225',
            'keterangan' => 'nullable|string',
        ]);

        $surat->update($validate);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil diperbarui.');
    }

    // Menghapus surat
    public function destroy($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $surat->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat berhasil dihapus.');
    }
}
