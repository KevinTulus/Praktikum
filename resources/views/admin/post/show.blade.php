@include('homepage.layout.head')

@include('homepage.layout.header')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Tambahkan Post Baru</h1>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

@include('homepage.layout.foot')

@include('homepage.layout.footer')
