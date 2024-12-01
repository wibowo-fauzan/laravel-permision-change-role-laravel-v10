<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Deskripsi default untuk SEO jika tidak ada di halaman.')">
    <meta name="keywords" content="@yield('meta_keywords', 'keyword, contoh, laravel, aplikasi')">
    <meta name="author" content="Nama Anda atau Perusahaan">

    <!-- Open Graph (OG) Tags for Social Media -->
    <meta property="og:title" content="@yield('og_title', 'Judul Halaman')">
    <meta property="og:description" content="@yield('og_description', 'Deskripsi untuk social media')">
    <meta property="og:image" content="@yield('og_image', 'link_ke_gambar.jpg')">
    <meta property="og:url" content="@yield('og_url', url()->current())">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Judul Halaman')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Deskripsi Twitter')">
    <meta name="twitter:image" content="@yield('twitter_image', 'link_ke_gambar.jpg')">

    <title>@yield('title', 'Judul Default - Nama Aplikasi')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.7.1-web/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>

    @yield('content')

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }} defer"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
