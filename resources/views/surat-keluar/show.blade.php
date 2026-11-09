@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')

<div class="bg-white rounded-xl shadow-md p-6 max-w-3xl mx-auto">

    <div class="border-b pb-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Detail Surat Keluar
        </h1>

        <p class="text-gray-500 mt-1">
            Informasi lengkap surat keluar.
        </p>
    </div>

    <div class="space-y-4">

        <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-sm text-gray-500">Nomor Surat</p>
            <p class="font-semibold text-gray-800">
                {{ $surat->nomor_surat }}
            </p>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-sm text-gray-500">Tanggal</p>
            <p class="font-semibold text-gray-800">
                {{ $surat->tanggal }}
            </p>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-sm text-gray-500">Tujuan</p>
            <p class="font-semibold text-gray-800">
                {{ $surat->tujuan }}
            </p>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-sm text-gray-500">Perihal</p>
            <p class="font-semibold text-gray-800">
                {{ $surat->perihal }}
            </p>
        </div>

        <div class="bg-gray-50 p-4 rounded-lg">
            <p class="text-sm text-gray-500">Keterangan</p>
            <p class="font-semibold text-gray-800">
                {{ $surat->keterangan ?? '-' }}
            </p>
        </div>

    </div>

    <div class="mt-6 flex justify-between items-center">

        <a href="{{ route('surat-keluar.index') }}"
           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">
            Kembali
        </a>

        <a href="{{ route('surat-keluar.edit', $surat->id) }}"
           class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded-lg">
            Edit Surat
        </a>

    </div>

</div>

@endsection
