<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <header class="bg-white shadow-md p-4 w-full top-0 z-50 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600 mr-4">Facebook</a>
            <input type="text" placeholder="Buscar..." class="p-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <nav class="flex space-x-6">
            <a href="#" class="text-gray-600 hover:text-blue-600">🏠 Inicio</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">👥 Amigos</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">🔔 Notificaciones</a>
            </nav>
        <div class="flex items-center space-x-4">

        </div>
    </header>

    <div class="main-container flex mt-20 px-4 max-w-7xl mx-auto">
        <aside class="w-1/4 p-4 sticky top-20 h-screen overflow-y-auto">
            <ul class="space-y-4">
                <li>

                </li>
                <li><a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 hover:bg-gray-200 p-2 rounded-lg transition-colors duration-200">👥 <span class="ml-2">Amigos</span></a></li>
                <li><a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 hover:bg-gray-200 p-2 rounded-lg transition-colors duration-200">🏘️ <span class="ml-2">Grupos</span></a></li>
                <li><a href="#" class="flex items-center space-x-3 text-gray-700 hover:text-blue-600 hover:bg-gray-200 p-2 rounded-lg transition-colors duration-200">🗓️ <span class="ml-2">Eventos</span></a></li>
                </ul>
        </aside>

        <main class="w-1/2 p-4">
            @yield('content')
        </main>

        <aside class="w-1/4 p-4 sticky top-20 h-screen overflow-y-auto">
            <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
                <h4 class="font-semibold text-gray-700 mb-3">Sugerencias para ti</h4>
                <ul class="space-y-2 text-gray-600">
                    <li><a href="#" class="hover:underline">Persona A</a></li>
                    <li><a href="#" class="hover:underline">Persona B</a></li>
                    </ul>
            </div>
            </aside>
    </div>
</body>
</html>