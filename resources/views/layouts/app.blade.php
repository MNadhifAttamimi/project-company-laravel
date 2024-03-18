<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Project')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan stylesheet tambahan jika diperlukan -->
    @yield('styles')
    <style>
        /* Tambahkan gaya khusus untuk footer */
        footer {
            background-color: #dcdee0; /* Warna latar belakang */
            color: black; /* Warna teks */
            padding: 20px 0; /* Ruang padding */
            text-align: center; /* Pusatkan teks */
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-5">
        @yield('content')
        
    </div>

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Tambahkan script tambahan jika diperlukan -->
    @yield('scripts')
</body>
</html>