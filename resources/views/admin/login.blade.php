@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- Left Section -->
<div class="login-left">
    <div class="text-center">
        <img src="{{ asset('images/logo-sekolah.svg') }}" alt="Logo" class="school-logo" 
             style="width: 100px; height: 100px; margin-bottom: 20px;">
    </div>

    <div class="welcome-text">
        <h4 style="font-size: 1.8rem; font-weight: 700;">Selamat Datang!</h4>
        <p style="font-size: 1rem; margin-bottom: 30px;">Silakan login untuk melanjutkan</p>
    </div>

    @if(session('error'))
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
    </div>
    @endif

    <form action="{{ route('admin.login.post') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('username') is-invalid @enderror" 
                   id="username" name="username" placeholder="Username" 
                   value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                   id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-2"></i>Login
        </button>
    </form>
</div>

<!-- Right Section -->
<div class="login-right">
    <h2 style="font-size: 2rem; font-weight: 700;">SMKN 4 Bogor</h2>
    <p style="font-size: 1.2rem;">Unggul dalam Teknologi, Berkarakter, dan Berwawasan Lingkungan</p>
</div>
@endsection
