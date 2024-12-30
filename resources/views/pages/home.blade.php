@extends('layouts.apploginregister')

@section('title', 'Login | DocWibi Online Web Tutorial')
<meta name="description"
    content="Panduan lengkap tentang berbagai bahasa pemrograman, termasuk tutorial, dokumentasi, dan best practices untuk pengembang perangkat lunak di berbagai platform.">
@section('meta_keywords',
    'aplikasi web, pengembangan aplikasi web, aplikasi digital, platform web, software
    development, aplikasi online, solusi teknologi, web development, teknologi digital, pengembangan perangkat lunak')
@section('og_title', 'DocWibi Online Web Tutorial')
@section('og_description',
    'Panduan lengkap tentang berbagai bahasa pemrograman, termasuk tutorial, dokumentasi, dan
    best practices untuk pengembang perangkat lunak di berbagai platform.')
@section('og_url', url()->current())
@section('twitter_title', 'DocWibi Online Web Tutorial')
@section('twitter_description',
    'Panduan lengkap tentang berbagai bahasa pemrograman, termasuk tutorial, dokumentasi,
    dan best practices untuk pengembang perangkat lunak di berbagai platform.')
@section('twitter_image', 'link_ke_image_twitter.jpg')
@section('og_image', 'link_ke_image_og.jpg')
@section('content')
    <div class="container">
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </div>
@endsection
