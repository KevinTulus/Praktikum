@include('homepage.layout.head')

@include('homepage.layout.header')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Ubah Data Siswa</h1>
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

                            <form action="{{ route('student.update', $users->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>NIS:</strong>
                                            <input type="text" name="ni" value="{{ $users->ni }}" class="form-control" placeholder="ni">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nama:</strong>
                                            <input type="text" name="name" value="{{ $users->name }}" class="form-control" placeholder="name">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            <input type="email" name="email" value="{{ $users->email }}" class="form-control" placeholder="email">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                        <label for="kelas">Kelas:</label>
                                            <select id="kelas" name="kelas">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Password:</strong>
                                            <input type="password" name="password" class="form-control" placeholder="password">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Konfirmasi Password:</strong>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="password">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

@include('homepage.layout.foot')

@include('homepage.layout.footer')
