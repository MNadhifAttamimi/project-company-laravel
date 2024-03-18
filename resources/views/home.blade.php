@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="display-4">Amani Tempat Belajar Mengajar</h1>
            <p>Mendidik Generasi Muda Menuju Masa Depan yang Lebih Baik: Amani, Tempat Belajar dan Mengajar yang Mengutamakan Pendidikan Berkualitas dan Pembentukan Karakter.</p>
            <a href="#" class="btn btn-primary">Cek Sekarang!</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('src/close-up-colleagues-meeting.jpg') }}" alt="Gambar ruang kelas" class="img-fluid">
        </div>
    </div>
</div>
@endsection
