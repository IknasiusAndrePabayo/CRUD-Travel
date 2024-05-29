@extends('layouts.login')

@section('judul')
    Halaman Login
@endsection

@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Anggota</b>Kelompok</a>
                <p>
                Khalid Ibnu Natsir		H1101221046 <br>
                    Andreanus Eko Putra		H1101221059 <br>
                    Febryanto			H1101221063 <br>
                    Muhammad Naufal Akbar	H1101221066 <br>
                    Fachri Julianda		H1101221067 <br>
                <p>
            </div>
            <div class="card-body">
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary btn-block" style="text-decoration: none;">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-block">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary btn-block">Register</a>
                @endif
            @endauth

            
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection