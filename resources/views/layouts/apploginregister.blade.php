<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">

    <!-- Open Graph Metadata -->
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:description" content="@yield('og_description')">
    <meta property="og:image" content="@yield('og_image')">
    <meta property="og:url" content="@yield('og_url')">

    <!-- Twitter Metadata -->
    <meta name="twitter:title" content="@yield('twitter_title')">
    <meta name="twitter:description" content="@yield('twitter_description')">
    <meta name="twitter:image" content="@yield('twitter_image')">
</head>

<body>
    @yield('content')
</body>

</html>
