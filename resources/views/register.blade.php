@extends('layout.guest')

@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column text-center">
        <h3 class="text-center">Selamat Datang</h3>
        <div id="date_time">Rabu, 28 Februari 2024 - 20:36:49</div>
        <hr>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="mb-2">
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="telepon" placeholder="Nomor Telepon">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="keperluan" placeholder="Keperluan">
            </div>
            <button type="submit" name="submit" class="form-control btn btn-success btn-sm">Submit</button>
            <a href="{{ route('home') }}" class="mt-2 btn btn-danger btn-sm form-control">Kembali</a>
        </form>
        <div class="mt-3 fw-lighter" style="font-size: 12px">
            <span>© 2024 BUKU TAMU - BY ALBIAGI</span>
        </div>
    </div>
</div>
@endsection