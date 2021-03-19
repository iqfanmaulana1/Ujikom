<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $data = [
            'nip' => '1234',
            'nama_guru' => 'faisal rohman',
            'mapel' => 'PBO'
        ];
        return view('v_guru', $data);
    }
}
