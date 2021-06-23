<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Job;
use App\Models\Course;


class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('viewAny', Student::class);

        $id = auth()->id();
        $di = Teacher::where('user_id', $id)->get();
        $id_guru = $di->pluck('id');

        $jobs = Job::where('teacher_id', $id_guru)->get();
        $tasks = $jobs->pluck('course_id');

        for($x = 0; $x < count($tasks); $x++) {
            $tugas[] = Course::where('id', $tasks[$x] )->first();
        }
        $collection2  = collect($tugas);

        $kelas = $collection2->pluck('kelas');
        $lessons = $collection2->pluck('course_name');

        for($x = 0; $x < count($kelas); $x++) {
            $siswa[] = Student::where('kelas', $kelas[$x])->get();
        }
        $collection3 = collect($siswa);
        $students = $collection3->flatten(1);

        // foreach ($lessons as $value) {
        //     echo $value;
        //     echo "<br>";
        // }

        //$lessons->dd();
        
        return view('portal.pages.nilai.index', compact('students', 'lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $jobs = Job::all();
        $students = Student::where('id', $id)->first();
        return view('portal.pages.nilai.edit',compact('students', 'jobs'));//
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
            'nilai' => ['required', 'numeric', 'min:0', 'max:100'],
            'pelajaran' => ['required'],
        ]);

        $pelajaran = $request['pelajaran'];

        echo $pelajaran;

        $student = student::find($id);
        $student->$pelajaran = $request['nilai'];
        $student->save();

        return redirect()->route('nilai.index')->with('success','Nilai Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

