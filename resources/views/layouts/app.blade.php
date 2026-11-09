<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Sistem Informasi Surat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-blue-700 text-white shadow-md">
        <div class="max-w-6xl mx-auto px-6 py-5">
            <h2 class="text-2xl font-bold">
                Sistem Informasi Surat
            </h2>

            <nav class="flex gap-6 mt-4">
                <a href="{{ route('dashboard') }}"
                   class="hover:text-blue-200">
                    Dashboard
                </a>

                <a href="{{ route('surat-masuk.index') }}"
                   class="hover:text-blue-200">
                    Surat Masuk
                </a>

                <a href="{{ route('surat-keluar.index') }}"
                   class="hover:text-blue-200">
                    Surat Keluar
                </a>
            </nav>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-8">
        @yield('content')
    </main>

    <footer class="text-center text-gray-500 py-6">
        <p>Sistem Informasi Surat</p>
    </footer>

</body>
</html>
