<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmroHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{asset('logo.jpeg')}}">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto">
        <header class="mb-6 flex justify-between items-center bg-white p-4 rounded shadow">
            <h1 class="text-2xl font-bold text-blue-600">AmroHub</h1>
            <nav class="space-x-4">
                <a href="{{ route('plans.index') }}" class="text-gray-700 hover:text-blue-500">Plans</a>
                <a href="{{ route('join-requests.index') }}" class="text-gray-700 hover:text-blue-500">Join Requests</a>
                <a href="{{ route('user-plans.index') }}" class="text-gray-700 hover:text-blue-500">My Plans</a>
                <a href="{{ route('usage-logs.index') }}" class="text-gray-700 hover:text-blue-500">Usage Logs</a>
            </nav>
        </header>

        "C:\laragon\bin\php\php-8.2.30-nts-Win32-vs16-x64\php.exe" "C:\ProgramData\ComposerSetup\bin\composer.phar" update
        <main>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
