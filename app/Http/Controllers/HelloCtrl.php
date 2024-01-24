<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Models\Kategori;

class HelloCtrl extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function input()
    {
        return view('input');
    }

    public function simpan(Request $request)
    {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'ket' => $ket,
        ]);
    }

    public function view_makanan()
    {
        $makanans = Makanan::all();
        // dd($makanans);

        return view('makanan', ['foods' => $makanans]);
    }

    public function test()
    {
        Makanan::create([
            'kd_makanan' => 'M003',
            'nama' => 'Gorengan',
            'kategori' => 'Snack',
            'harga' => 1000,
            'ket' => 'ada'
        ]);

        return 'berhasil simpan!';
    }
}
