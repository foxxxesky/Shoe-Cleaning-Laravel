@extends('layouts.login&register.login_register')


@section('webtitle')
<title>SHOE CLEANING | Login</title>
@endsection

@section('right_content')
<!-- Right Content -->
<section id="grid-right">

    <div class="row justify-content-center p-5">
        <!-- alert regis berhasil -->
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- alert login gagal -->
        @if(session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="col-9 pt-5">
            <h4 id="text-masuk" class="pb-4">Masuk</h4>
            <!-- Form Masuk -->
            <form action="{{ route('login-user') }}" method="POST">
                @csrf
                <div class="form">
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="Email" id="form-text" class="form-label">Alamat
                            Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="Password" id="form-text" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Button -->
                    <div class="mb-4">
                        <button id="login-button" type="submit" name="Masuk" class="btn btn-primary">Masuk</button>
                    </div>
                </div>
            </form>
            <div class="mb-4">
                <p id="link-text-register" class="text-center">Belum punya akun? <a id="link-page"
                        href="/Register">Daftar</a></p>
            </div>
        </div>
    </div>
</section>
<!-- Right Content -->
@endsection