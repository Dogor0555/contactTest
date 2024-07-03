@extends('layouts.app')

@section('title', 'Contáctanos')

@section('content')
<h1 class="text-3xl font-bold mb-6">Déjanos un mensaje</h1>

@if (session('info'))
    <div id="success-message" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 dark:bg-green-900 dark:border-green-700 dark:text-green-300 transition-opacity duration-500 ease-out" role="alert">
        <p>{{ session('info') }}</p>
    </div>
@endif

<form action="{{ route('contactanos.store') }}" method="POST" class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-gray-300">Nombre:</label>
        <input type="text" name="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-100" value="{{ old('name') }}">
        @error('name')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="correo" class="block text-gray-700 dark:text-gray-300">Correo:</label>
        <input type="email" name="correo" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-100" value="{{ old('correo') }}">
        @error('correo')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
    <label for="phone" class="block text-gray-700 dark:text-gray-300 mb-2">Teléfono:</label>
    <div class="flex">
        <div class="relative w-2/5">
            <select name="country_code" id="country_code" class="appearance-none w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 py-2 px-4 pr-8 rounded-md leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                <option value="+1">🇺🇸 +1 Estados Unidos</option>
                <option value="+52">🇲🇽 +52 México</option>
                <option value="+54">🇦🇷 +54 Argentina</option>
                <option value="+55">🇧🇷 +55 Brasil</option>
                <option value="+56">🇨🇱 +56 Chile</option>
                <option value="+57">🇨🇴 +57 Colombia</option>
                <option value="+58">🇻🇪 +58 Venezuela</option>
                <option value="+502">🇬🇹 +502 Guatemala</option>
                <option value="+503">🇸🇻 +503 El Salvador</option>
                <option value="+504">🇭🇳 +504 Honduras</option>
                <option value="+505">🇳🇮 +505 Nicaragua</option>
                <option value="+506">🇨🇷 +506 Costa Rica</option>
                <option value="+507">🇵🇦 +507 Panamá</option>
                <option value="+51">🇵🇪 +51 Perú</option>
                <option value="+593">🇪🇨 +593 Ecuador</option>
                <option value="+591">🇧🇴 +591 Bolivia</option>
                <option value="+595">🇵🇾 +595 Paraguay</option>
                <option value="+598">🇺🇾 +598 Uruguay</option>
                <option value="+34">🇪🇸 +34 España</option>
                <option value="+44">🇬🇧 +44 Reino Unido</option>
                <option value="+49">🇩🇪 +49 Alemania</option>
                <option value="+33">🇫🇷 +33 Francia</option>
                <option value="+39">🇮🇹 +39 Italia</option>
                <option value="+81">🇯🇵 +81 Japón</option>
                <option value="+86">🇨🇳 +86 China</option>
                <option value="+91">🇮🇳 +91 India</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
        <input type="text" name="phone" class="w-3/5 ml-2 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300" value="{{ old('phone') }}" placeholder="Número de teléfono">
    </div>
    @error('phone')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>


    <div class="mb-4">
        <label for="mensaje" class="block text-gray-700 dark:text-gray-300">Mensaje:</label>
        <textarea name="mensaje" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-100">{{ old('mensaje') }}</textarea>
        @error('mensaje')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded dark:bg-blue-700 dark:hover:bg-blue-500">Enviar mensaje</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.classList.add('opacity-0');
            }, 1000);
        }
    });
</script>
@endsection