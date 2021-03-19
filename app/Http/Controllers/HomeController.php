<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMK BINA CENDEKIA',
            'alamat'       => 'Jl Mertapada Wetan'
        ];
        return view('v_home', $data);
    }
}