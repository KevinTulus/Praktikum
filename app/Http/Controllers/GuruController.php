<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class GuruController extends Controller
{

	public function index()
	{
      	$gurus = user::where('role', 2)->get();
        return view('homepage.admin.guru', compact('gurus'));

		// if($request){
		// 		$guru = user::where('role', 2)->get();
		// }else{
		// 		$guru = user::where('name', 'like', '%'.$request->keyword.'%')->get();
		// }
    //
  }

    public function search(Request $request){
        $search = $request->search;
        $gurus = DB::table('users')->where('name','LIKE',"%".$search."%")->paginate(1);
        return view('homepage.admin.guru',compact('gurus'));
    }

}
//     		// mengambil data dari table pegawai
//     $guru = DB::table('User')->paginate(10);
//     $gurus = U\users::where('role', 2)->get();
//     		// mengirim data pegawai ke view index
//     return view('homepage.guru',compact('gurus'));
// // 	}
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
