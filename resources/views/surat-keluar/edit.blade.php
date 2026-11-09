@extends('layouts.app')

@section('title', 'Edit Surat Keluar')

@section('content')

<div class="bg-white rounded-xl shadow-md p-6 max-w-3xl mx-auto">

    <div class="border-b pb-4 mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Edit Surat Keluar
        </h1>

        <p class="text-gray-500 mt-1">
            Perbarui informasi surat keluar.
        </p>
    </div>

    <form action="{{ route('surat-keluar.update', $surat->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="space-y-5">

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Nomor Surat
                </label>

                <input type="text"
                       name="nomor_surat"
                       value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                @error('nomor_surat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Tanggal
                </label>

                <input type="date"
                       name="tanggal"
                       value="{{ old('tanggal', \Carbon\Carbon::parse($surat->tanggal)->format('Y-m-d')) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                @error('tanggal')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Tujuan
                </label>

                <input type="text"
                       name="tujuan"
                       value="{{ old('tujuan', $surat->tujuan) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                @error('tujuan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Perihal
                </label>

                <input type="text"
                       name="perihal"
                       value="{{ old('perihal', $surat->perihal) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                @error('perihal')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold text-gray-700 mb-2">
                    Keterangan
                </label>

                <textarea name="keterangan"
                          rows="4"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ old('keterangan', $surat->keterangan) }}</textarea>

                @error('keterangan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="flex justify-between items-center mt-7">

            <a href="{{ route('surat-keluar.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">
                Kembali
            </a>

            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
                Perbarui Surat
            </button>

        </div>

    </form>

</div>

@endsection
