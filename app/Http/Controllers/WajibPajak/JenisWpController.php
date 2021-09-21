<?php

namespace App\Http\Controllers\WajibPajak;

use App\Http\Controllers\Controller;

class JenisWpController extends Controller
{
    public function index()
    {
        return view('wajib-pajak.jenis-pajak.index');
    }
}
