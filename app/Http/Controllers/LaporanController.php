<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // create return view laporan.index
    public function index()
    {
        return view('laporan.index');
    }
}
