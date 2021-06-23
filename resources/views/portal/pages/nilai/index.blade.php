@extends('portal.layout.app')

@section('subtitle', 'Manajemen Nilai Siswa')

@section('taskclass', 'active')

@section('content')
<div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Nilai Siswa</h4>
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
                        Siswa
                      </th>
                      <th>
                        Kelas
                      </th>
                      <th>
                        Mata Pelajaran
                      </th>
                      <th>
                        Nilai
                      </th>
                      <th >
                        Aksi
                      </th>
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
                        <td>
                          {{++$i}}
                        </td>
                        <td>
                            {{ $student->user->name }}
                        </td>
                        <td>
                            {{ $student->kelas }}
                        </td>
                        <td>
                            {{ $pelajaran }}
                        </td>
                        <td>
                            {{ $student->$pelajaran }}
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('nilai.edit',$student->id) }}">Edit</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
      @endsection