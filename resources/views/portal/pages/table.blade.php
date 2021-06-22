@extends('portal.layout.app')

@section('subtitle', 'Tabel')

@section('classtable', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Student</h4>
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
                      <th class="text-right">
                        Email
                      </th>
                      <th class="text-right">
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
                        <td class="text-right">
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
                </div>
              </div>
            </div>
      @endsection