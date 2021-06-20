<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class TeacherController extends Controller
{

	public function index(Request $request)
	{
		if($request){
				$guru = user::where('role', 2)->get();
		}else{
				$guru = user::where('name', 'like', '%'.$request->cari.'%')->get();
		}

		return view('homepage.guru', compact('guru', 'request'));
//     		// mengambil data dari table pegawai
// 		//$guru = DB::table('User')->paginate(10);
//     $gurus = U\users::where('role', 2)->get();
//     		// mengirim data pegawai ke view index
// 		return view('homepage.guru',compact('gurus'));
	}
//
// 	public function cari(Request $request)
// 	{
// 		// menangkap data pencarian
// 		$cari = $request->cari;
//
//     		// mengambil data dari table pegawai sesuai pencarian data
// 		$gurus = DB::table('users')
// 		->where('name','like',"%".$cari."%")
// 		->paginate();
//
//     		// mengirim data pegawai ke view index
// 		return view('homepage.guru',compact('gurus'));
//
// 	}
//
}
