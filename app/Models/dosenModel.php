<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosenModel extends Model
{
    use HasFactory;

    Public function allData()
    {
        return [
            [
                'nip' => '1234',
                'nama' => 'Bambang',
                'matkul' => 'Fisika'
            ],
            [
                'nip' => '1235',
                'nama' => 'Budi',
                'matkul' => 'Kimia'
            ],
            [
                'nip' => '1236',
                'nama' => 'Siti',
                'matkul' => 'Biologi'
            ]
        ];
    }
}
