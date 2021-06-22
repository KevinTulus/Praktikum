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

  }

    public function search(Request $request){
        $search = $request->search;
        $gurus = DB::table('users')->where('name','LIKE',"%".$search."%")->paginate(1);
        return view('homepage.admin.guru',compact('gurus'));
    }

}