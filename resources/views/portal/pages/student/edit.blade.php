@extends('portal.layout.app')

@section('subtitle', 'Manajemen Siswa')

@section('studentclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Ubah Siswa</h4>
              </div>
              <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('student.index') }}"> Back</a>
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
                <form action="{{ route('student.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          NIS
                        </td>
                        <td>
                          <input type="text" name="ni" value="{{ $users->ni }}"class="form-control" placeholder="ni">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Nama
                        </td>
                        <td>
                          <input type="text" name="name" value="{{ $users->name }}" class="form-control" placeholder="name">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Email
                        </td>
                        <td>
                          <input type="email" name="email" value="{{ $users->email }}" class="form-control" placeholder="email">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Kelas
                        </td>
                        <td>
                            <select id="kelas" name="kelas">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Password
                        </td>
                        <td>
                        <input type="password" name="password" class="form-control" placeholder="password">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Konfirmasi Password
                        </td>
                        <td>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="password">
                        </td>
                      </tr>
                      <tr>
                        <td>
                        
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