@extends('layouts.AuthLayout')

@section('title', 'Login')

@section('content')
    <div class="auth-form">
        <div class="card my-5">
            <div class="card-body">
                <div class="text-center">
                    <h4>KANTOR WILAYAH</h4> <h4>KEMENKUMHAM</h4>
                    <img src="{{ URL::asset('image/kemenkumham.png') }}" alt="images"  class="img-fluid w-25 mb-3">
                    <h4 class="f-w-500 mb-1">Login Pesera</h4>
                    <p class="mb-3">Tidak Punya Akun? <a href="{{ route('register') }}"
                            class="link-primary ms-1">Buat Akun</a></p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="admin@phoenixcoded.com" required autocomplete="email" autofocus id="floatingInput" placeholder="Masukkan Username">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" type="password" class="form-control @error('password') is-invalid @enderror" value="12345678" name="password" required autocomplete="current-password" id="floatingInput1" placeholder="Masukkan Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
