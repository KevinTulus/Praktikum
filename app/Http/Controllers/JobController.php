<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Job::class);
        $jobs = Job::paginate(10);
        return view('portal.pages.job.index', compact('jobs'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::all();
        $teachers = Teacher::all();
        return view('portal.pages.job.create', compact('jobs', 'teachers'));
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
            'pelajaran' => ['required'],
            'guru' => ['required'],
        ]);
        
        $job = new Job;
        $job->course_id = $request['pelajaran'];
        $job->teacher_id = $request['guru'];
        $job->save();

        return redirect()->route('job.index')
                        ->with('success','Job Berhasil Ditambahkan.');
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
        $teachers = Teacher::all();

        $jobs1 = Job::where('id', $id)->first();
        return view('portal.pages.job.edit',compact('jobs', 'teachers', 'jobs1'));
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
            'pelajaran' => ['required'],
            'guru' => ['required'],
        ]);
        
        $job = job::find($id);
        $job->course_id = $request['pelajaran'];
        $job->teacher_id = $request['guru'];
        $job->save();

        return redirect()->route('job.index')
                        ->with('success','Job Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect()->route('job.index')
                        ->with('success','Guru Berhasil Dihapus');
    }
}
