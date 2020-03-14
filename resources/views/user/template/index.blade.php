@extends('header.master')
@section('content')
<div class="gambar"><center><img src="{{asset ('assets/image/ambil.jpg') }}" class="img-fluid" alt="ambil sampah"></center>
        <div class="text1">
            <p style="color: white; text-transform: uppercase;" class="nama">KUMPULKAN SAMPAHMU SEKARANG</p>
            <h6 style="color: orangered;">Dapatkan hadiah</h6>
            <div class="button"></div>
            
            <a  href="{{route('login')}}">
                <button class="button">Masuk</button>
            </a>
            <a  href="{{url('/tentang')}}">
                <button class="button1">Tentang</button>
            </a>
            
        </div>
        </div>

@endsection