@extends('portal.layout.app')

@section('subtitle', 'Manajemen Berita')

@section('newsclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Berita</h4>
              </div>

              <div class="row">
                  <div class="col-lg-12 margin-tb">
                      <div class="pull-right">
                          <a class="btn btn-success" href="{{ route('post.create') }}">Tambah Berita Baru</a>
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
                        Judul
                      </th>
                      <th>
                        Slug
                      </th>
                      <th>
                        Kutipan
                      </th>
                      <th>
                        Isi :
                      </th>
                      <th>
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>
                          {{++$i}}
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            {{$post->slug}}
                        </td>
                            {{$post->excerpt}}
                        <td>
                            {{$post->body}}
                        </td>
                        <td>
                            {{$post->image}}
                        </td>
                        <td>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('post.show',$post->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm" href="{{ route('post.edit',$post->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $posts->links() !!}
                </div>
              </div>
            </div>
      @endsection