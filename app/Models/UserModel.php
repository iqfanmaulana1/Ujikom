<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public function allData()
    {
       return [
            [
                'nip' => '12345',
                'nama' => 'Kamal',
                'alamat' => 'Kendal',
                'hobi' => 'Main Bola'
            ],
            [
                'nip' => '21345',
                'nama' => 'Iman',
                'alamat' => 'Mertapada',
                'hobi' => 'Main Bola'
            ],
            [
                'nip' => '32145',
                'nama' => 'Khumaeroh',
                'alamat' => 'Japura',
                'hobi' => 'membaca'
            ],
        ];
    }
}
