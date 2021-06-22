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
                <form action="{{ route('profile.update',$profil->id) }}" method="POST">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h6>Email</h6>
                          <input type="text" name="email" value="{{ $profil->email }}" class="form-control" placeholder="email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h6>Password</h6>
                          <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h6>Konfirmasi Password</h6>
                          <input type="password" name="password_confirmation" class="form-control" placeholder="password">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection