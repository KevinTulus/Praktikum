
@extends('portal.layout.app')

@section('subtitle', 'Manajemen Berita')

@section('newsclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Detail Berita</h4>
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
                        <td scope="row">Judul</td>
                        <td scope="row">{{$posts->title}}</td>
                    </tr>
                    <tr>
                        <td scope="row">Slug</td>
                        <td scope="row">{{$posts->slug}}</td>
                    </tr>
                    <tr>
                        <td scope="row">Kutipan</td>
                        <td scope="row">{{$posts->excerpt}}</td>
                    </tr>
                    <tr>
                        <td scope="row">Isi</td>
                        <td scope="row">{{$posts->body}}</td>
                    </tr>
                    <tr>
                        <td scope="row">Gambar</td>
                        <td scope="row">{{$posts->image}}</td>
                    </tr>
                    <tr>
                        <td scope="row">Tanggal</td>
                        <td scope="row">{{$posts->created_at}}</td>
                    </tr>
                    <tr>
                        <td scope="row">
                            <form action="{{ route('post.destroy', $posts->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{ route('post.edit',$posts->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                  </table>
                </form>
                </div>
              </div>
            </div>
      @endsection