@extends('layout.guest')

@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column">
        <h3 class="text-center">Selamat Datang</h3>
        <div id="date_time" class="text-center">Rabu, 28 Februari 2024 - 20:36:49</div>
        <hr>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="mb-2">
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" value="{{ old('nama_lengkap') }}" name="nama_lengkap" placeholder="Nama Lengkap">
                @error('nama_lengkap')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" name="alamat" placeholder="Alamat">
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <input type="text" class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon') }}" name="telepon" placeholder="Nomor Telepon">
                @error('telepon')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control @error('keperluan') is-invalid @enderror" value="{{ old('keperluan') }}" name="keperluan" placeholder="Keperluan">
                @error('keperluan')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" name="submit" class="form-control btn btn-success btn-sm">Submit</button>
            <a href="{{ route('home') }}" class="mt-2 btn btn-danger btn-sm form-control">Kembali</a>
        </form>
        <div class="mt-3 fw-lighter text-center" style="font-size: 12px">
            <span>© 2024 BUKU TAMU - BY ALBIAGI</span>
        </div>
    </div>
</div>
@endsection