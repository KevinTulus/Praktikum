<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    Public function index()
    {
        $data = [
            'kelas' => 'Kom c',
            'prodi' => 'Teknologi Informasi'
        ];
        return view('v_home', $data);
    }
}
