@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="row align-items-center">
    <div class="col-lg-6">
        <h1 class="display-4">Contact Us</h1>
        <ul class="list-unstyled">
            <li><strong>Phone:</strong> <a href="tel:+628566668114">0856 6668 114</a>, <a href="tel:+62895391539188">0895 3915 39188</a></li>
            <li><strong>Address:</strong> Ruko King Plasa Blok D No.1 Batu Aji, Kota Batam</li>
        </ul>
        <p class="lead">Feel free to reach out to us for any inquiries or questions you may have.</p>
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-6 d-none d-lg-block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.463866137697!2d104.03206131426638!3d1.1533149990589753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040227d23d39f31%3A0xc34920f3eeb0f54f!2sRuko%20King%20Plasa%20Batu%20Aji!5e0!3m2!1sen!2sid!4v1648086671789!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection
