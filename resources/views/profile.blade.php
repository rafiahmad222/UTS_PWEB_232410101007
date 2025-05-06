@extends('layouts.app')
@section('slot')
<div class="flex flex-col lg:flex-row gap-6 px-4 py-2 font-['Noto_Sans']">
    <div class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/2">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Informasi Akun</h3>
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/foto_profile.jpg') }}" alt="Foto Profil" class="w-32 h-32 rounded-full shadow-md">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
            <input type="text" id="username" name="username" value="{{ $username }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" value="user@example.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="role">Role</label>
            <input type="text" id="role" name="role" value="Administrator" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/2">
        <h3 class="text-lg font-bold text-gray-800 mb-6">Data Manajemen Hidroponik Jember</h3>
        <div class="grid grid-cols-2 gap-4 h-5/6">
            <div class="bg-green-100 shadow-md rounded-lg p-4 flex flex-col justify-center hover:scale-105 transition-transform duration-300">
                <h4 class="text-center text-2xl font-bold text-green-700 mb-2">Total Penjualan</h4>
                <p class="text-center text-green-600 text-xl font-bold">Rp {{ number_format($Data_Keuangan['total_penjualan'], 0, ',', '.') }}</p>
            </div>
            <div class="bg-red-100 shadow-md rounded-lg p-4 flex flex-col justify-center hover:scale-105 transition-transform duration-300">
                <h4 class="text-center text-2xl font-bold text-red-700 mb-2">Biaya Produksi</h4>
                <p class="text-center text-red-600 text-xl font-bold">Rp {{ number_format($Data_Keuangan['biaya_produksi'], 0, ',', '.') }}</p>
            </div>
            <div class="bg-blue-100 shadow-md rounded-lg p-4 flex flex-col justify-center hover:scale-105 transition-transform duration-300">
                <h4 class="text-center text-2xl font-bold text-blue-700 mb-2">Laba Bersih</h4>
                <p class="text-center text-blue-600 text-xl font-bold">Rp {{ number_format($Data_Keuangan['laba_bersih'], 0, ',', '.') }}</p>
            </div>
            <div class="bg-yellow-100 shadow-md rounded-lg p-4 flex flex-col justify-center hover:scale-105 transition-transform duration-300">
                <h4 class="text-center text-2xl font-bold text-yellow-700 mb-2">Jumlah Karyawan</h4>
                <p class="text-center text-yellow-600 text-xl font-bold">42 Orang</p>
            </div>
        </div>
    </div>
</div>
@endsection
