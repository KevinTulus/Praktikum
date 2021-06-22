@extends('portal.layout.app')

@section('subtitle', 'Tabel')

@section('classtable', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Job</h4>
              </div>

              <div class="row">
                  <div class="col-lg-12 margin-tb">
                      <div class="pull-right">
                          <a class="btn btn-success" href="{{ route('job.create') }}">Tambah Job Baru</a>
                      </div>
                  </div>
              </div>
              
              @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
              @endif

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No.
                      </th>
                      <th>
                        Mata Pelajaran
                      </th>
                      <th>
                        Kelas
                      </th>
                      <th>
                        Guru
                      </th>
                      <th >
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($jobs as $job)
                      <tr>
                        <td>
                          {{++$i}}
                        </td>
                        <td>
                          {{$job->course->course_name}}
                        </td>
                        <td>
                          {{$job->course->kelas}}
                        </td>
                        <td>
                          {{$job->teacher->user->name}}
                        </td>
                        <td>
                          <form action="{{ route('job.destroy', $job->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('job.edit',$job->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $jobs->links() !!}
                </div>
              </div>
            </div>
      @endsection