@extends('Layouts.loginBase')
@section('content')
    <div class="login-card">
        <img src="{{ asset('pena.png') }}"  style="max-width: 100px" alt=""><br><br>
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('postLogin') }}" class="login-form" method="POST">
            @csrf
         
            <input type="text" name="email" id="email" placeholder="Email"
                class="@error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" name="password" id="password" placeholder="password">
            <button>Login</button>
            <a href="/reset-password">Forgot Your Password</a>
        @endsection
