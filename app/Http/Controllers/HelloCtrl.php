<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // DB::table('makanans')->insert([
        //     'kd_makanan' => 'M004',
        //     'nama' => 'Es Teh',
        //     'kategori' => 'Minuman',
        //     'harga' => 2500,
        //     'ket' => 'ada'
        // ]);

        Makanan::create([
            'kd_makanan' => 'M006',
            'nama' => 'Es Telo',
            'kategori' => 'Minuman',
            'harga' => 2500,
            'ket' => 'ada'
        ]);

        // Makanan::find('M004')->delete();

        return 'berhasil simpan!';
    }
}
