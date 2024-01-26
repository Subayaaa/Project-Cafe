<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriCtrl extends Controller
{
    public function index()
    {
        return view('kategori');
    }
}
