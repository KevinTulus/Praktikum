@extends('portal.layout.auth')

@include('portal.layout.headauth')

@section('content')

<div class="container login vw-100">
    <div class="row vh-100 mt-4">
        <div class="col m-auto">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-arrow-left mr-2"></i>
                        Kembali ke homepage
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{--<img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo" />--}}
                </div>
                <h1 class="w-100"><strong>Login Portal</strong><br />SMA Harapan Bangsa</h1>
            </div>
            <div class="row text-left">
                <div class="col-md-4 m-auto">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form action="{{ route('login')}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <label for="email">Email / NIS / NIP</label>
                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <p class="w-100 text-right mb-0 mt-2">
                                            <a class="mt-2" href="{{ url('/portal/lupa-password') }}">Lupa Password?</a>
                                        </p>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                <p class="text-center mt-2 w-100">Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection