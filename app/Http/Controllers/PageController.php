<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (empty($request->username) && empty($request->password)) {
            return back()->withErrors(['username' => 'Username dan Password tidak boleh kosong']);
        }

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password harus lebih dari 8 karakter',
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username])->with('success', 'Berhasil login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->with('error', 'Please login first');
        }
        $status_pesanan = [
            ['status' => 'Diterima', 'jumlah' => 50],
            ['status' => 'Diproses', 'jumlah' => 30],
            ['status' => 'Dikirim', 'jumlah' => 20],
            ['status' => 'Selesai', 'jumlah' => 10]
        ];
        $top_produk =[
            ['nama' => 'Tomat', 'penjualan' => 180],
            ['nama' => 'Jeruk', 'penjualan' => 200],
            ['nama' => 'Apel', 'penjualan' => 170],
            ['nama' => 'Pisang', 'penjualan' => 220]
        ];

        $pesanan_baru = [
            ['id' => 1, 'nama_pelanggan' => 'Bima Gondrong', 'produk' => 'Tomat', 'jumlah' => 2, 'total' => '25000'],
            ['id' => 2, 'nama_pelanggan' => 'Yayangz Imutz', 'produk' => 'Bawang Merah', 'jumlah' => 1, 'total' => '50000'],
            ['id' => 3, 'nama_pelanggan' => 'Habib Kiyowo', 'produk' => 'Selada', 'jumlah' => 3, 'total' => '30000'],
        ];

        return view('dashboard', compact('username', 'status_pesanan', 'top_produk', 'pesanan_baru'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        $Data_Keuangan = [
            'total_penjualan' => 1500000,
            'biaya_produksi' => 500000,
            'laba_bersih' => 1000000,
        ];

        return view('profile', compact('username', 'Data_Keuangan'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->with('error', 'Please login first');
        }
        $data = [
            [
                'nama' => 'Selada',
                'harga' => '10000',
                'stok' => '10',
                'foto' => 'seladasegar.jpg',
                'kategori' =>'Sayuran',
            ],
            [
                'nama' => 'Bawang Merah',
                'harga' => '20000',
                'stok' => '20',
                'foto' => 'bawang.png',
                'kategori' => 'Sayuran',
            ],
            [
                'nama' => 'Tomat',
                'harga' => '15000',
                'stok' => '15',
                'foto' => 'tomat-segar.png',
                'kategori' => 'Sayuran',
            ],
            [
                'nama' => 'Jeruk',
                'harga' => '30000',
                'stok' => '5',
                'foto' => 'jeruk.jpg',
                'kategori' => 'Buah',
            ],
            [
                'nama' => 'Apel',
                'harga' => '25000',
                'stok' => '8',
                'foto' => 'apel.png',
                'kategori' => 'Buah',
            ],
            [
                'nama' => 'Pisang',
                'harga' => '12000',
                'stok' => '12',
                'foto' => 'pisang-wenak.jpg',
                'kategori' => 'Buah',
            ]
        ];
        $kategoris = ['Sayuran', 'Buah'];

        $kategori =$request->input('kategori');
        if ($kategori) {
            $data = array_filter($data, function ($item) use ($kategori) {
                return $item['kategori'] === $kategori;
            });
        }
        return view('pengelolaan', compact('username','data', 'kategoris', 'kategori'));
    }

    public function logout(Request $request)
    {
        return redirect()->route('login')->with('success', 'Logout successful');
    }
}
