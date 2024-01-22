<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function test($id = 0)
    {
        $nama = 'IK2';

        return view('test', ['nama' => $nama, 'id' => $id]);
    }
}
