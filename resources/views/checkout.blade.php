@extends('layout.guest')

@section('content')
<div class="container min-vh-100 min-vw-100 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column" style="min-width: 40vh">
        <h3 class="text-center">Selamat Datang</h3>
        <div id="date_time" class="text-center">Rabu, 28 Februari 2024 - 20:36:49</div>
        <hr>
        <table class="table table-sm border-top">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Keperluan</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_lengkap }}</td>
                    <td>{{ $item->keperluan }}</td>
                    <td class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">Keluar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{ route('home') }}" class="btn btn-danger btn-sm">Kembali</a>
        </div>
        <div class="mt-3 fw-lighter text-center" style="font-size: 12px">
            <span>© 2024 BUKU TAMU - BY ALBIAGI</span>
        </div>
    </div>
</div>
@endsection