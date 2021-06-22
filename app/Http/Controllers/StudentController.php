<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Models\User;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Student::class);
        $users = User::where('role', 3)->paginate(10);
        return view('portal.pages.student.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.pages.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ni' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
            'kelas' => ['required'],
        ]);
        
        $user = new User;
        $user->ni = $request['ni'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role = '3';
        $user->password = Hash::make($request['password']);
        $user->save();

        $user = User::all()->last();
        $student = new Student;
        $student->user_id = $user->id;
        $student->kelas = $request['kelas'];
        $student->save();


        return redirect()->route('student.index')
                        ->with('success','Siswa Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('portal.pages.student.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'ni' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
            'kelas' => ['required'],
        ]);

        $user = User::find($id);
        $user->ni = $request['ni'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();

        $student = Student::where('user_id', $id)->first();
        $student->user_id = $user->id;
        $student->kelas = $request['kelas'];
        $student->save();
        
        return redirect()->route('student.index')
                        ->with('success','Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('student.index')
                        ->with('success','Siswa Berhasil Dihapus');
    }
}
