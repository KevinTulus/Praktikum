@extends('portal.layout.app')

@section('subtitle', 'Profil')

@section('classprofile', 'active')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Ubah Profile</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h6>NIS</h6>
                      <h7>{{$profil->ni}}</h7>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h6>Nama</h6>
                      <h7>{{$profil->name}}</h7>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h6>Email</h6>
                      <h7>{{$profil->email}}</h7>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <h6>Password</h6>
                      <h7></h7>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <a href="{{ route('profile.edit',$profil->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection