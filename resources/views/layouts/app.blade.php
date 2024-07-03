<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.classList.add('dark');
            }
        });
    </script>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <header class="bg-white shadow dark:bg-gray-800">
        <div class="container mx-auto px-4 py-6">
            <nav class="flex justify-between items-center">
                <a href="/" class="text-xl font-bold">Logo</a>
                <ul class="flex space-x-4 items-center">
                    <li><a href="/" class="text-blue-500 dark:text-blue-300 hover:underline">Inicio</a></li>
                    <li><a href="{{ route('contactanos.index') }}" class="text-blue-500 dark:text-blue-300 hover:underline">Contáctanos</a></li>
                    <li>
                        <button onclick="toggleDarkMode()" class="text-blue-500 dark:text-blue-300 hover:underline">
                            Modo Oscuro
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-white shadow mt-12 py-4 dark:bg-gray-800">
        <div class="container mx-auto px-4 text-center">
            &copy; {{ date('Y') }} Tu Compañía. Todos los derechos reservados.
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
