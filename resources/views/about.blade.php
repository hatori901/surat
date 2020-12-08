@extends('layouts.master')
@section('title','About')
@section('content')
    <div class="inner-banner">
        <span class="banner__shape-1"></span>
        <span class="banner__shape-2"></span>
        <span class="banner__shape-3"></span>
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">About</a></li>
            </ul>
            <h2 class="inner-banner__title">About</h2>
        </div>
    </div>
    <div class="content my-5">
        <div class="container">
            <div class="inner__content">
                <p class="about__text"><span>Surat Izin Online</span> adalah aplikasi berbasis web surat izin secara online yang tujukan kepada siswa siswi sekolah.</p>
                <p>Tanpa Aplikasi Surat Online siswa seringkali tidak memberikan surat izin ke sekolah dengan berbagai alasan<br>Contohnya sebagai berikut.</p>
                <ol type="1">
                    <li>Rumah jauh dari sekolah</li>
                    <li>Tidak ada yang mengantarkan surat</li>
                    <li>Tidak bisa membuat surat</li>
                </ol>
                <p>Dengan dibuatnya aplikasi surat online,<br>Diharapkan :</p>
                <ul>
                    <li>Membantu siswa dalam mengirim surat jika terkendala transportasi</li>
                    <li>Membantu siswa yang tidak sempat membuat surat</li>
                    <li>Menghemat biaya</li>
                    <li>Efisien dalam pengiriman surat</li>
                </ul>
            </div>
        </div>
    </div>
@endsection