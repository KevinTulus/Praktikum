
@extends('portal.layout.app')

@section('subtitle', 'Manajemen Nilai Siswa')

@section('taskclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Ubah Nilai Siswa</h4>
              </div>
              <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('nilai.index') }}"> Back</a>
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
                <form action="{{ route('nilai.update', $students->id) }}" method="POST">
                @csrf
                @method('PUT')
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                            <label for="nama">Nama : {{ $students->user->name }}</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <label for="kelas">Kelas : {{ $students->kelas }}</label>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <label for="pelajaran">Mata Pelajaran :</label>
                            <select id="pelajaran" name="pelajaran">
                                @foreach ($jobs as $job)
                                    <option value="{{ $job->course->course_name }}">{{ $job->course->course_name." Kelas ".$job->course->kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Nilai :
                          <input type="number" name="nilai" value="{{ $students->nilai }}" class="form-control" placeholder="nilai">
                        </td>
                        <td>
                      </tr>
                      <tr>
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