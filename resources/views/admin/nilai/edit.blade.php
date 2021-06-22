@include('homepage.layout.head')

@include('homepage.layout.header')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Ubah Nilai Siswa</h1>
                            <div class="float-right">
                                <a class="btn btn-secondary" href="{{ route('nilai.index') }}"> Back</a>
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

                            <form action="{{ route('nilai.update', $students->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama: {{ $students->user->name }}</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="kelas">Kelas: {{ $students->kelas }}</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="pelajaran">Mata Pelajaran:</label>
                                                <select id="pelajaran" name="pelajaran">
                                                    @foreach ($jobs as $job)
                                                        <option value="{{ $job->course->course_name }}">{{ $job->course->course_name." Kelas ".$job->course->kelas }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nilai:</strong>
                                            <input type="number" name="nilai" value="{{ $students->nilai }}" class="form-control" placeholder="nilai">
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
