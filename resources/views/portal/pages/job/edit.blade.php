@extends('portal.layout.app')

@section('subtitle', 'Manajemen Bidang Studi Guru')

@section('jobclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Ubah Data Bidang Studi</h4>
              </div>
              <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('job.index') }}"> Back</a>
                </div>
                <br>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

              <div class="card-body">
                <div class="table-responsive">
                <form action="{{ route('job.update', $jobs1->id) }}" method="POST">
                @csrf
                @method('PUT')
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          Mata Pelajaran
                        </td>
                        <td>
                            <select id="pelajaran" name="pelajaran">
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->id }}">{{ $job->course->course_name." Kelas ".$job->course->kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Guru
                        </td>
                        <td>
                            <select id="guru" name="guru">
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                @endforeach
                            </select>
                        </td>
                      </tr>
                        </td>
                        <td>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                </div>
              </div>
            </div>
      @endsection