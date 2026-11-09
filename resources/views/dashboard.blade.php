@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-6xl mx-auto space-y-8">

    <!-- Hero Section -->
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-slate-900 via-blue-950 to-indigo-900 p-8 md:p-10 shadow-xl">

        <div class="relative z-10 max-w-2xl">

            <span class="inline-block bg-blue-500/20 text-blue-300 px-4 py-2 rounded-full text-xs font-semibold tracking-wider mb-5">
                ✦ SISTEM INFORMASI ADMINISTRASI
            </span>

            <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                Kelola Surat Lebih Mudah,
                <span class="text-blue-400">Kerja Lebih Teratur.</span>
            </h1>

            <p class="text-slate-300 mt-4 leading-relaxed">
                Selamat datang di Sistem Informasi Surat.
                Satu tempat untuk mengelola seluruh data surat
                masuk dan surat keluar secara praktis.
            </p>

            <div class="flex flex-wrap gap-3 mt-7">

                <a href="{{ route('surat-masuk.index') }}"
                   class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-3 rounded-lg text-sm font-semibold transition">
                    Mulai Kelola Surat →
                </a>

                <a href="{{ route('surat-keluar.index') }}"
                   class="border border-slate-500 hover:bg-white/10 text-white px-5 py-3 rounded-lg text-sm transition">
                    Lihat Surat Keluar
                </a>

            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute -right-16 -bottom-28 w-80 h-80 rounded-full bg-blue-500/10"></div>
        <div class="absolute right-16 top-8 w-32 h-32 rounded-full bg-indigo-400/10 blur-2xl"></div>

        <div class="hidden md:block absolute right-16 top-1/2 -translate-y-1/2 text-8xl opacity-20">
            📁
        </div>

    </div>

    <!-- Section Menu -->
    <div>
        <div class="flex items-center justify-between mb-5">
            <div>
                <h2 class="text-xl font-bold text-slate-800">
                    Akses Menu
                </h2>

                <p class="text-sm text-slate-500 mt-1">
                    Pilih layanan administrasi yang tersedia.
                </p>
            </div>

            <span class="text-xs text-blue-600 font-semibold bg-blue-50 px-3 py-2 rounded-lg">
                MENU UTAMA
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Surat Masuk -->
            <a href="{{ route('surat-masuk.index') }}"
               class="group bg-white border border-slate-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-lg transition duration-300">

                <div class="flex justify-between items-start">

                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-3xl">
                        📥
                    </div>

                    <span class="text-2xl text-slate-300 group-hover:text-blue-600 group-hover:translate-x-1 transition">
                        →
                    </span>

                </div>

                <h3 class="text-xl font-bold text-slate-800 mt-5">
                    Surat Masuk
                </h3>

                <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                    Pencatatan dan pengelolaan seluruh surat
                    yang diterima oleh instansi.
                </p>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <span class="text-sm font-semibold text-blue-600">
                        Buka halaman surat masuk
                    </span>
                </div>

            </a>

            <!-- Surat Keluar -->
            <a href="{{ route('surat-keluar.index') }}"
               class="group bg-white border border-slate-200 rounded-2xl p-6 hover:border-indigo-400 hover:shadow-lg transition duration-300">

                <div class="flex justify-between items-start">

                    <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center text-3xl">
                        📤
                    </div>

                    <span class="text-2xl text-slate-300 group-hover:text-indigo-600 group-hover:translate-x-1 transition">
                        →
                    </span>

                </div>

                <h3 class="text-xl font-bold text-slate-800 mt-5">
                    Surat Keluar
                </h3>

                <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                    Pencatatan dan pengelolaan seluruh surat
                    yang diterbitkan dan dikirim.
                </p>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <span class="text-sm font-semibold text-indigo-600">
                        Buka halaman surat keluar
                    </span>
                </div>

            </a>

        </div>
    </div>

    <!-- Informasi -->
    <div class="bg-slate-900 rounded-2xl p-6 text-white">

        <div class="flex items-start gap-4">

            <div class="text-3xl">💡</div>

            <div>
                <h3 class="font-bold text-lg">
                    Tentang Sistem
                </h3>

                <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                    Sistem Informasi Surat merupakan aplikasi
                    berbasis web yang dirancang untuk membantu
                    proses pengelolaan surat masuk dan surat keluar
                    agar lebih efektif, rapi, dan terorganisir.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection
