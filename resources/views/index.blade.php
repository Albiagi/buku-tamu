@extends('layout.guest')

@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column text-center">
        <div class="mb-2">
            <img src="#" alt="">
        </div>
        <div class="mb-2">
            <h3>Selamat Datang</h3>
        </div>
        <div>
            <div id="date_time">Rabu, 28 Februari 2024 - 18:15:15</div>
        </div>
        <hr>
        <div class="d-inline">
            <div class="d-inline">
                <a href="{{ route('register') }}" class="btn btn-success btn-sm">Register</a>
            </div>
            <div class="d-inline">
                <a href="{{ route('out') }}" class="btn btn-danger btn-sm">Check Out</a>
            </div>
        </div>
        <div class="mt-3 fw-lighter" style="font-size: 12px">
            <span>© 2024 BUKU TAMU - BY ALBIAGI</span>
        </div>
    </div>
</div>
@endsection