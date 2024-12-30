@extends('layouts.appguest')

@section('title', 'Sistem Bimbingan Dan Konseling Terpadu Online')

@section('meta_description',
    'Sistem Bimbingan dan Konseling Terpadu Online membantu siswa dan konselor dalam melakukan
    bimbingan secara efisien dan terstruktur.')
@section('meta_keywords', 'bimbingan konseling, sistem online, konselor, bimbingan siswa, platform pendidikan')
@section('og_title', 'Sistem Bimbingan Dan Konseling Terpadu Online')
@section('og_description',
    'Sistem Bimbingan dan Konseling Terpadu Online adalah platform yang mempermudah siswa dalam
    mendapatkan bimbingan langsung dari konselor melalui sistem online.')
@section('og_image', asset('images/og-image.jpg'))
<!-- Gambar untuk Open Graph, pastikan file ada di folder public/images -->
@section('og_url', url()->current())

@section('twitter_title', 'Sistem Bimbingan Dan Konseling Terpadu Online')
@section('twitter_description',
    'Platform online yang memfasilitasi komunikasi antara siswa dan konselor untuk bimbingan
    yang lebih baik.')
@section('twitter_image', asset('images/twitter-image.jpg'))
<!-- Gambar untuk Twitter Card, pastikan file ada di folder public/images -->

@section('content')
    <h1>ini adalah halaman index pertama (/)</h1>
    <form action="/login" method="get">
        <button>Login</button>
    </form>
@endsection
