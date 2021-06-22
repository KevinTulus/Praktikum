@include('homepage.layout.head')

@include('homepage.layout.header')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Data Student</h1>
                            <br>

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

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">{{++$i}} </td>
                                        <td scope="row">{{$user->ni}}</td>
                                        <td scope="row">{{$user->name}}</td>
                                        <td scope="row">{{$user->email}}</td>
                                        <td scope="row">
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
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

@include('homepage.layout.foot')

@include('homepage.layout.footer')
