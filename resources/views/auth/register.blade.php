@extends('layouts.apploginregister')

{{-- @section('contents')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 25rem;">
            <div class="card-header text-center">
                Register
            </div>

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card-body">
                <form method="post" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection --}}

@section('title', 'registrasi | DocWibi Online Web Tutorial')
<meta name="description"
    content="Panduan lengkap tentang berbagai bahasa pemrograman, termasuk tutorial, dokumentasi, dan best practices untuk pengembang perangkat lunak di berbagai platform.">
@section('meta_keywords',
    'aplikasi web, pengembangan aplikasi web, aplikasi digital, platform web, software
    development, aplikasi online, solusi teknologi, web development, teknologi digital, pengembangan perangkat lunak')
@section('og_title', 'DocWibi Online Web Tutorial')
@section('og_description',
    'Panduan lengkap tentang berbagai bahasa pemrograman, termasuk tutorial, dokumentasi, dan
    best practices untuk pengembang perangkat lunak di berbagai platform.')
@section('og_url', url()->current())
@section('twitter_title', 'DocWibi Online Web Tutorial')
@section('twitter_description',
    'Panduan lengkap tentang berbagai bahasa pemrograman, termasuk tutorial, dokumentasi,
    dan best practices untuk pengembang perangkat lunak di berbagai platform.')
@section('twitter_image', 'link_ke_image_twitter.jpg')
@section('og_image', 'link_ke_image_og.jpg')
@section('content')

    <main>
        <section class="d-flex align-items-center justify-content-center min-vh-100">
            <!-- Gambar latar belakang untuk login -->
            <div class="d-flex justify-content-center align-items-center flex-shrink-0" style="width: 50%; height: 400px;">
                <img src="{{ asset('asset/img/imgbg_login.png') }}" alt="Ilustrasi login" class="img-fluid"
                    style="height: 100%; object-fit: cover;">
            </div>

            <!-- Form login -->
            <div class="d-flex justify-content-center align-items-center" style="width: 50%; min-height: 400px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h1 class="display-4 text-center">Registrasi</h1>
                                <p class="mb-4 text-center">Masuk ke akun Anda untuk mengakses aplikasi. Jika Anda belum
                                    memiliki akun, silakan daftar terlebih dahulu.</p>
                            </div>

                            <!-- Formulir login -->
                            <form action="/register" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Masukkan nama Anda</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Masukkan Email Anda</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Masukkan Password Anda</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Konfirmasi Password Anda</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation">
                                </div>

                                <!-- Opsi "remember me" dan link untuk "forgot password" -->
                                <div class="d-flex mb-4 justify-content-between align-items-center">
                                    <label class="form-check-label">
                                        <input type="checkbox" checked="checked" name="remember" class="form-check-input">
                                        Remember me
                                    </label>
                                    <a href="#" class="text-muted">Forgot Password?</a>
                                </div>

                                <!-- Tombol login -->
                                <button type="submit" class="btn btn-primary">Register</button>

                                <!-- Pemisah login sosial -->
                                <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

                                <!-- Login sosial -->
                                <div class="justify-content-around">
                                    <a href="#"
                                        class="btn btn-light d-flex shadow justify-content-center align-items-center w-100 mt-3 border border-1">
                                        <i class="fab fa-google me-2"></i>
                                        <span>Google</span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-primary d-flex shadow justify-content-center align-items-center w-100 mt-3 border border-1">
                                        <i class="fab fa-facebook me-2"></i>
                                        <span>Facebook</span>

                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
