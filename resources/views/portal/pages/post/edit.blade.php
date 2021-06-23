
@extends('portal.layout.app')

@section('subtitle', 'Manajemen Berita')

@section('newsclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Ubah Berita</h4>
              </div>
              <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('post.index') }}"> Back</a>
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
                <form action="{{ route('post.update', $posts->id) }}" method="POST">
                @csrf
                @method('PUT')
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          Judul
                        </td>
                        <td>
                            <input type="text" name="title" value="{{ $posts->title }}" class="form-control" placeholder="title">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Slug 
                        </td>
                        <td>
                            <input type="text" name="slug" value="{{ $posts->slug }}" class="form-control" placeholder="slug">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Kutipan
                        </td>
                        <td>
                            <input type="text" name="excerpt" value="{{ $posts->excerpt }}" class="form-control" placeholder="excerpt">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Isi
                        </td>
                        <td>
                            <input type="text" name="body" value="{{ $posts->body }}" class="form-control" placeholder="body">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Gambar
                        </td>
                        <td>
                            <input type="text" name="image" value="{{ $posts->image }}" class="form-control" placeholder="image">
                        </td>
                      </tr>
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