<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    public function allData()
    {
        return [
            [
                'nip' => '12345',
                'nama' => 'Muhammad Khanif',
                'mapel' => 'Pemograman Web'
            ],
            [
                'nip' => '21345',
                'nama' => 'Tere Wahyu',
                'mapel' => 'Bahasa Indonesia'
            ],
        ];
    }
}
