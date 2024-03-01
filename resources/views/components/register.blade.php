@extends('layout.guest')

@section('content')
    <div class="container-fluid">
        <div class="d-flex min-vh-100 align-items-center justify-content-center">
            <div class="border shadow rounded py-4 px-5" style="min-width: 40vh; min-height: 40vh;">
                <div class="text-center fs-1">
                    <i class="bi bi-person-circle"></i>
                </div>
                <h4 class="text-center">Register</h4>
                <hr>
                <form action="{{ url('proses_register') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <input type="text" class="form-control @error('name') is-invalid @enderror focus-ring focus-ring-success" value="{{ old('name') }}" name="name" placeholder="Nama Lengkap" autofocus>
                        @error('username')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control @error('username') is-invalid @enderror focus-ring focus-ring-success" value="{{ old('username') }}" name="username" placeholder="Username">
                        @error('username')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control @error('email') is-invalid @enderror focus-ring focus-ring-success" value="{{ old('email') }}" name="email" placeholder="Email">
                        @error('email')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control @error('password') is-invalid @enderror focus-ring focus-ring-success" name="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger form-control">Register</button>
                    </div>
                </form>
                <div class="mt-2 text-center" style="font-size: 15px">
                    Do you have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                </div>
                <div class="mt-3 text-center">
                    <span class="fw-lighter text-uppercase" style="font-size: 12px">&copy; 2024 buku tamu - by albiagi</span>
                </div>
            </div>
        </div>
    </div>
@endsection