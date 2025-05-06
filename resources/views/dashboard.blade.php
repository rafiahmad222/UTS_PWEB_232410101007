@extends('layouts.app')
@section('title', 'Dashboard')
@section('slot')
    <div class="flex font-['Noto_Sans']">
        <x-sidebar :username="$username"></x-sidebar>
        <div class="flex-grow flex flex-col">
            @if (session('success'))
                <div id="success-message"
                    class="absolute top-4 right-4 flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded shadow transition transform duration-500 ease-in-out opacity-0 translate-x-[20px]">
                    <div class="w-4 h-4 bg-green-500 rounded-full animate-pulse mr-2"></div>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            <div class="p-4">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <p class="text-gray-800 mt-2">Selamat datang, <span class="font-bold">{{ $username }}</span> di dashboard website Hidroponik Jember</p>
                <div class="mt-4">
                    <h2 class="text-xl font-bold mb-4">Produk Penjualan Terbanyak</h2>
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($top_produk as $produk)
                            <div class="bg-white shadow-md rounded-lg p-4">
                                <h3 class="text-lg font-bold text-gray-800">{{ $produk['nama'] }}</h3>
                                <p class="text-gray-600 mt-2">Penjualan: <span class="font-bold text-green-600">{{ $produk['penjualan'] }}</span> pcs</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-4">
                    <h2 class="text-xl font-bold mb-4">Status Pesanan</h2>
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($status_pesanan as $status)
                            <div class="bg-white shadow-md rounded-lg p-4">
                                <h3 class="text-center text-2xl font-bold text-gray-800">{{ $status['status'] }}</h3>
                                <p class="text-center text-gray-600 mt-2 text-lg"><span class="font-bold text-green-600">{{ $status['jumlah'] }}</span> pesanan</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-4">
                    <h2 class="text-xl font-bold mb-2">Pesanan Baru</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr class="bg-blue-100">
                                    <th class="py-1 px-4 border-b text-left text-gray-800 font-bold">ID</th>
                                    <th class="py-1 px-4 border-b text-left text-gray-800 font-bold">Nama Pelanggan</th>
                                    <th class="py-1 px-4 border-b text-left text-gray-800 font-bold">Produk</th>
                                    <th class="py-1 px-4 border-b text-left text-gray-800 font-bold">Jumlah</th>
                                    <th class="py-1 px-4 border-b text-left text-gray-800 font-bold">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan_baru as $pesanan)
                                    <tr>
                                        <td class="py-1 px-4 border-b text-gray-700">{{ $pesanan['id'] }}</td>
                                        <td class="py-1 px-4 border-b text-gray-700">{{ $pesanan['nama_pelanggan'] }}</td>
                                        <td class="py-1 px-4 border-b text-gray-700">{{ $pesanan['produk'] }}</td>
                                        <td class="py-1 px-4 border-b text-gray-700">{{ $pesanan['jumlah'] }}</td>
                                        <td class="py-1 px-4 border-b text-gray-700">Rp. {{number_format($pesanan['total'], 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-auto">
                <x-footer></x-footer>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const message = document.getElementById('success-message');
                if (message) {
                    // Tambahkan animasi masuk
                    setTimeout(() => {
                        message.classList.remove('opacity-0', 'translate-x-[20px]');
                        message.classList.add('opacity-100', 'translate-x-0');
                    }, 10);
                    setTimeout(() => {
                        message.classList.remove('opacity-100', 'translate-x-0');
                        message.classList.add('opacity-0', 'translate-x-[20px]');
                    }, 10000);
                }
            });
        </script>
    @endsection
