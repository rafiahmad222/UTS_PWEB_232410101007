@extends('layouts.app')
@section('slot')
<h2 class="text-xl font-bold mt-4 mx-4">Pengelolaan Produk</h2>
<div class="mb-4 flex justify-center">
    <a href="{{ route('pengelolaan' ,['username' => $username]) }}" class="font-semibold px-4 py-2 mx-2 rounded-full  {{ request('kategori') ? 'bg-gray-200 text-gray-700 hover:bg-gray-300' : 'bg-green-500 text-white' }}">
        Semua
    </a>
    @foreach ($kategoris as $kategori)
        <a href="{{ route('pengelolaan', ['username' => $username,'kategori' => $kategori]) }}"
            class="font-semibold px-4 py-2 rounded-full mx-2 {{ request('kategori') == $kategori ? 'bg-green-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
            {{ $kategori }}
        </a>
    @endforeach
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-4">
    @foreach ($data as $item)
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h3 class="text-lg font-semibold mb-2">{{ $item['nama'] }}</h3>
        <p class="text-gray-700">Harga: {{ $item['harga'] }}</p>
        <p class="text-gray-700">Stok: {{ $item['stok'] }}</p>
    </div>
    @endforeach
</div>
@endsection
