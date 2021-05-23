<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosenModel;

class dosenController extends Controller
{
    public function __construct()
    {
        $this -> dosenModel = new dosenModel();
    }

    public function index()
    {
        $data = [
            'dosen' => $this->dosenModel->allData(),
        ];
        return view('v_dosen', $data);
    }
}
