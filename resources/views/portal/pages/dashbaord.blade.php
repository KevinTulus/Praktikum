@extends('portal.layout.app')

@section('subtitle', 'Dasbor')

@section('classdashboard', 'active')

@section('content')

<div class="typography-line">
    <span>Quote</span>
    <blockquote>
        <br>
    <p class="blockquote blockquote-primary">
        Halo, {{ Auth::user()->name }}. Selamat Datang di Portal SMA Harapan Bangsa.
        <br>
        <br>
    </p>
    </blockquote>
</div>
@endsection