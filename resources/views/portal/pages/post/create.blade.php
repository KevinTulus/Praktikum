
@extends('portal.layout.app')

@section('subtitle', 'Manajemen Berita')

@section('newsclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tambahkan Berita Baru</h4>
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
                <form action="{{ route('post.store') }}" method="POST">
                @csrf
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          Judul :
                        </td>
                        <td>
                          <input type="text" name="title" class="form-control" placeholder="Isi Judul Berita">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Slug :
                        </td>
                        <td>
                          <input type="text" name="slug" class="form-control" placeholder="Slug">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Kutipan :
                        </td>
                        <td>
                          <input type="text" name="excerpt" class="form-control" placeholder="Kutipan">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Isi :
                        </td>
                        <td>
                          <input type="text" name="body" class="form-control" placeholder="Isi Berita">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Gambar :
                        </td>
                        <td>
                          <input type="text" name="image" class="form-control" placeholder="Masukkan Gambar">
                        </td>
                      </tr>
                      <tr>
                        <td>
                        
                        </td>
                        <td>
                        <button type="submit" class="btn btn-primary">Posting</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                </div>
              </div>
            </div>
      @endsection