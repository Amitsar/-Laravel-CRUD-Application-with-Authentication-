<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome | Laravel CRUD</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-100 via-indigo-100 to-purple-200 min-h-screen flex items-center justify-center">

    <div class="max-w-2xl mx-auto bg-white px-10 py-12 rounded-3xl shadow-2xl text-center space-y-8 animate-fade-in-down">
        <h1 class="text-5xl font-extrabold text-indigo-700 drop-shadow-sm">👋 Welcome to <span class="text-purple-600">Laravel CRUD</span></h1>
        <p class="text-gray-600 text-lg leading-relaxed">Manage your product data like a pro. Secure, simple, and beautifully styled with modern tools.</p>

        <div class="flex flex-col sm:flex-row justify-center sm:space-x-6 space-y-4 sm:space-y-0">
            <a href="{{ route('login') }}" class="inline-block px-8 py-3 bg-indigo-600 text-black text-lg font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition duration-200">
                🔐 Login
            </a>
            <a href="{{ route('register') }}" class="inline-block px-8 py-3 bg-white border border-gray-300 text-gray-800 text-lg font-semibold rounded-lg shadow-md hover:bg-gray-100 transition duration-200">
                📝 Register
            </a>
        </div>
    </div>

    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-down {
            animation: fade-in-down 0.6s ease-out;
        }
    </style>

</body>
</html>
