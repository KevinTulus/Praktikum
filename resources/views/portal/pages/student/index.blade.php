@extends('portal.layout.app')

@section('subtitle', 'Tabel')

@section('classtable', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Student</h4>
              </div>

              <div class="row">
                  <div class="col-lg-12 margin-tb">
                      <div class="pull-right">
                          <a class="btn btn-success" href="{{ route('student.create') }}">Tambah Siswa Baru</a>
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
                        NIS
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Email
                      </th>
                      <th >
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>
                          {{++$i}}
                        </td>
                        <td>
                          {{$user->ni}}
                        </td>
                        <td>
                          {{$user->name}}
                        </td>
                        <td>
                          {{$user->email}}
                        </td>
                        <td>
                          <form action="{{ route('student.destroy', $user->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('student.edit',$user->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $users->links() !!}
                </div>
              </div>
            </div>
      @endsection