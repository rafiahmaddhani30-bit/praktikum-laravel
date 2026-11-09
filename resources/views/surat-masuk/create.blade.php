@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')

<div class="max-w-3xl mx-auto px-5 py-10">

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">

        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-700 to-indigo-600 px-8 py-7 text-white">
            <p class="text-blue-200 text-sm font-semibold uppercase tracking-widest">
                Formulir Administrasi
            </p>

            <h1 class="text-2xl font-bold mt-2">
                Tambah Surat Masuk
            </h1>

            <p class="text-blue-100 text-sm mt-2">
                Silakan isi informasi surat yang diterima.
            </p>
        </div>

        <!-- Form -->
        <form action="{{ route('surat-masuk.store') }}"
              method="POST"
              class="p-8 space-y-6">

            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Nomor Surat
                </label>

                <input type="text"
                       name="nomor_surat"
                       value="{{ old('nomor_surat') }}"
                       placeholder="Contoh: 001/FT/XI/2026"
                       class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       required>

                @error('nomor_surat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Tanggal Surat
                </label>

                <input type="date"
                       name="tanggal"
                       value="{{ old('tanggal') }}"
                       class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>

                @error('tanggal')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Pengirim
                </label>

                <input type="text"
                       name="pengirim"
                       value="{{ old('pengirim') }}"
                       placeholder="Masukkan nama pengirim"
                       class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>

                @error('pengirim')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Perihal
                </label>

                <input type="text"
                       name="perihal"
                       value="{{ old('perihal') }}"
                       placeholder="Masukkan perihal surat"
                       class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>

                @error('perihal')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Keterangan
                </label>

                <textarea name="keterangan"
                          rows="4"
                          placeholder="Tambahkan keterangan surat jika diperlukan..."
                          class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none">{{ old('keterangan') }}</textarea>

                @error('keterangan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-gray-100">

                <button type="submit"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-md transition duration-200">
                    Simpan Surat
                </button>

                <a href="{{ route('surat-masuk.index') }}"
                   class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 rounded-xl transition duration-200">
                    Kembali
                </a>

            </div>

        </form>
    </div>

    <p class="text-center text-gray-400 text-sm mt-6">
        Sistem Informasi Surat &copy; 2026
    </p>

</div>

@endsection
