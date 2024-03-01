@extends('layout.app')

@section('konten')
<div class="container-fluid">
    <div class="row">
        @include('components.sidebar')
        <div class="col bg-white min-vh-100">
            <div class="container-fluid border-bottom" id="navbar">
                @include('components.navbar')
            </div>
            <div class="mt-5 px-4">
                <h3>Guest List</h3>
                <p>List daftar tamu</p>
                <table class="table table-sm border-top">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Keperluan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($guest as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->telepon }}</td>
                            <td>{{ $item->keperluan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    
@endsection