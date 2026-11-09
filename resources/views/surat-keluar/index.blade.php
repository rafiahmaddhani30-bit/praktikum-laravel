@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')

<div class="bg-white rounded-xl shadow-md p-6">

    <h1 class="text-2xl font-bold text-gray-800 mb-5">
        Daftar Surat Keluar
    </h1>

    <a href="{{ route('surat-keluar.create') }}"
       class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg mb-5">
        + Tambah Surat Keluar
    </a>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">

            <thead>
                <tr class="bg-blue-600 text-white">
                    <th class="p-3">No</th>
                    <th class="p-3">Nomor Surat</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Tujuan</th>
                    <th class="p-3">Perihal</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($suratKeluar as $surat)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $surat->nomor_surat }}</td>
                        <td class="p-3">{{ $surat->tanggal }}</td>
                        <td class="p-3">{{ $surat->tujuan }}</td>
                        <td class="p-3">{{ $surat->perihal }}</td>

                        <td class="p-3 whitespace-nowrap">
                            <a href="{{ route('surat-keluar.show', $surat->id) }}"
                               class="text-blue-600 hover:underline">
                                Detail
                            </a>

                            <a href="{{ route('surat-keluar.edit', $surat->id) }}"
                               class="text-yellow-600 hover:underline ml-2">
                                Edit
                            </a>

                            <form action="{{ route('surat-keluar.destroy', $surat->id) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus surat ini?')"
                                    class="text-red-600 hover:underline ml-2">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection
