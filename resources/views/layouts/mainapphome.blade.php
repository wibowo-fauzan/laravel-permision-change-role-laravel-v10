<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Deskripsi default untuk SEO jika tidak ada di halaman.')">
    <meta name="keywords" content="@yield('meta_keywords', 'keyword, contoh, laravel, aplikasi')">
    {{-- <meta name="author" content="Nama Anda atau Perusahaan"> --}}

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

    <!-- Favicons -->
    {{-- <link href="{{ asset('assetshome/img/favicon.png') }}" rel="icon"> --}}
    <link href="{{ asset('assetshome/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetshome/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetshome/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetshome/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetshome/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetshome/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assetshome/css/main.css') }}" rel="stylesheet">



</head>

<body class="index-page">

    <!-- Content -->
    <div class="wrapper">
        @yield('content')
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetshome/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetshome/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assetshome/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assetshome/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetshome/vendor/swiper/swiper-bundle.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="assetshome/js/main.js"></script>

</body>

</html>
