<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuCtrl extends Controller
{
    public function index()
    {
        return view('menu');
    }
}
