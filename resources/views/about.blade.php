@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="row align-items-center">
    <div class="col-lg-6">
        <h1 class="display-4">About Us</h1>
        <p class="lead">We are Amani, a place where learning and teaching come together to create a brighter future. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis libero id mi finibus, nec lacinia mauris accumsan. Cras ut ipsum id nisl consequat scelerisque. Nunc euismod turpis id ante varius, at semper sem consequat. Mauris ut metus ut sapien bibendum dictum. Nullam volutpat felis ac ex pulvinar, a viverra nunc dapibus. Mauris eleifend interdum est, vel varius mi ultricies vel. In hac habitasse platea dictumst. Ut aliquam, magna nec placerat consequat, lectus eros malesuada ligula, sed scelerisque velit purus eget tortor.</p>
        <a href="#" class="btn btn-primary btn-lg">Learn More</a>
    </div>
    <div class="col-md-6 d-none d-lg-block text-center">
        <img src="{{ asset('src/medium-shot-asian-man-gesturing-as-if-presenting-product.jpg') }}" alt="Gambar orang nunjuk" class="img-fluid">
    </div>
</div>
@endsection
