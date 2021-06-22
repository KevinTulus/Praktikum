@include('homepage.layout.head')

@include('homepage.layout.header')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Data Nilai</h1>
                            <br>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Siswa</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $i=0;
                                        if($i <= 10) {$j = 1;}
                                        elseif ($i >= 11 && $i <=20) {$j = 2;}
                                        elseif ($i >= 21 && $i <=30) {$j = 3;}
                                        elseif ($i >= 31 && $i <=40) {$j = 4;}
                                        elseif ($i >= 41 && $i <=50) {$j = 5;}
                                        else {$j = 6;}
                                        $pelajaran = $lessons[$j];
                                    ?>

                                    @foreach ($students as $student)
                                    <tr>
                                        <td scope="row">{{ ++$i }} </td>
                                        <td scope="row">{{ $student->user->name }}</td>
                                        <td scope="row">{{ $student->kelas }}</td>
                                        <td scope="row">{{ $pelajaran }}</td>
                                        <td scope="row">{{ $student->$pelajaran }}</td>
                                        <td scope="row">
                                            <a class="btn btn-primary btn-sm" href="{{ route('nilai.edit',$student->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
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
