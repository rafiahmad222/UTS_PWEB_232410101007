@extends('layouts.app')
@section('slot')
<div class="flex h-screen">
    <div class="flex flex-col justify-center w-1/2 px-16 mt-4">
        <div class="mt-4 flex justify-center">
            <img src="{{ asset('images/Logo_AgroMart.png') }}" alt="Logo" class="w-40">
        </div>

        <div id="error-popup" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded shadow-lg text-center">
                <p id="error-message" class="text-red-600 font-bold"></p>
                <button onclick="closeErrorPopup()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">Tutup</button>
            </div>
        </div>

        <h1 class="text-2xl font-bold text-center mb-4">Login</h1>
        <p class="text-center mb-8">Selamat datang kembali! Silakan masuk ke akun Anda.</p>
        <form id="login-form" action="{{ route('login.post') }}" method="POST">
            @csrf
            <div>
                <label for="username" class="block text-lg font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username"
                class="w-full mb-6 border border-gray-300 rounded-md px-3 py-2 focus:border-green-500 focus:ring-green-600 focus:ring-1 focus:outline-none">
            </div>
            <div class="relative">
                <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password"
                class="w-full mb-8 border border-gray-300 rounded-md px-3 py-2 focus:border-green-500 focus:ring-green-600 focus:ring-1 focus:outline-none">
                <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-4 flex items-center">
                    <img id="eye-icon" src="{{ asset('images/eye-icon-hide.png') }}" alt="Show Password" class="h-5 w-5">
                </button>
            </div>
            <button type="submit" class="w-full py-2 text-white transition bg-green-700 rounded hover:bg-green-800 mb-8">Login</button>
        </form>
        <x-footer></x-footer>
    </div>
    <div class="w-1/2 h-full">
        <img src="{{ asset('images/Landing Page.png') }}" alt="Hidroponik" class="object-cover w-full h-full">
    </div>
</div>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.src = "{{ asset('images/eye-icon-show.png') }}";
        } else {
            passwordInput.type = 'password';
            eyeIcon.src = "{{ asset('images/eye-icon-hide.png') }}";
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        @if ($errors->any())
            let errorMessage = "";
            @foreach ($errors->all() as $error)
                errorMessage += "{{ $error }}\n";
            @endforeach

            showErrorPopup(errorMessage);
        @endif
    });

    function showErrorPopup(message) {
    const errorPopup = document.getElementById('error-popup');
    const errorMessage = document.getElementById('error-message');
    errorMessage.textContent = message;
    errorPopup.classList.remove('hidden');
    errorPopup.classList.add('flex');
    }

    function closeErrorPopup() {
        const errorPopup = document.getElementById('error-popup');
        errorPopup.classList.remove('flex');
        errorPopup.classList.add('hidden');
    }
</script>
@endsection
