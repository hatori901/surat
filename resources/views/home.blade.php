@extends('layouts.master')
@section('title','Home')
@section('content')
    <div class="banner pt-5">
        <span class="banner__shape-1"></span>
        <span class="banner__shape-2"></span>
        <span class="banner__shape-3"></span>
        <div class="container">
            <div class="row d-flex align-items-center h-md-100">
                <div class="col-md-6 z-50">
                    <div class="heading ">
                        <h3 class="animate__animated animate__backInLeft banner__title py-5 py-md-0">Kirim <br>
                            <span>
                                Surat Izin
                            </span>
                            <br>Tanpa Keluar Rumah
                        </h3>
                        <p class="banner__text animate__animated animate__backInUp">Surat Izin Web Application adalah
                            aplikasi surat izin
                            online yang ditujukan kepada siswa siswi sekolah.</p>
                    </div>
                </div>
                <div class="img-header d-none d-md-flex col-md-6">
                    <lottie-player src="assets/images/ilustration/animate/Animation03/drawkit-grape-animation-3-LOOP.json" background="transparent"  speed="1"  style="width: 500px;" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
    <div class="section-fitur mt-5">
        <div class="container mx-auto">
            <h2 class="font-weight-bold text-center mb-5">Layanan Surat Online</h2>
            <div class="row mx-auto">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <div class="fitur item shadow">
                        <span class="d-block mb-3 text-primary d-flex justify-content-center">
                            <lottie-player src="assets/images/ilustration/animate/Animation07/drawkit-grape-animation-7-LOOP.json" background="transparent"  speed="1"  style="width: 200px;" loop autoplay></lottie-player>
                        </span>
                        <h2>Buat Surat Sendiri</h2>
                        <p>
                            Siswa bisa membuat surat izin sendiri melalui gadget  
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <div class="fitur item shadow">
                        <span class="d-block mb-3 text-primary d-flex justify-content-center">
                            <lottie-player src="assets/images/ilustration/animate/Animation02/drawkit-grape-animation-2-LOOP.json" background="transparent"  speed="1"  style="width: 200px;" loop autoplay></lottie-player>
                        </span>
                        <h2>Tanpa Perlu Datang Ke Sekolah</h2>
                        <p>Siswa tidak perlud datang ke sekolah</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <div class="fitur item shadow">
                        <span class="d-block mb-3 text-primary d-flex justify-content-center">
                            <lottie-player src="assets/images/ilustration/animate/Animation08/drawkit-grape-animation-8-LOOP.json" background="transparent"  speed="1"  style="width: 200px;" loop autoplay></lottie-player>
                        </span>
                        <h2>Efisien Waktu Dan Biaya</h2>
                        <p>
                            Membuat surat online tanpa dikenakan biaya
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="info mt-5">
        <img src="assets/images/background/info-bg.png" class="info__bg" alt="Awesome Image" />
        <div class="container">
            <lottie-player src="assets/images/ilustration/animate/Animation06/drawkit-grape-animation-6-LOOP.json" background="transparent" class="info__moc" speed="1"  style="width: 500px;" loop autoplay></lottie-player>
            <div class="row justify-content-lg-end">
                <div class="col-lg-6">
                    <div class="info__content">
                        <div class="block-title text-left">
                            <h2 class="block-title__title">Buat Surat Izin Hanya Sekejap Mata</h2>
                        </div>
                        <div class="info__text">
                            <p>Buat Surat Izin Sekolah Tanpa Menulis. Manfaat dari aplikasi ini adalah :</p>
                        </div>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check"></i> Membantu siswa mengirim surat jika terkendala transportasi</li>
                            <li><i class="fa fa-check"></i> Membantu siswa yang tidak sempat membuat surat</li>
                            <li><i class="fa fa-check"></i> Efisien dalam pengiriman surat</li>
                        </ul>
                        <a href="{{ route('login') }}" class="btn btn-lg btn-outline-primary"><span>Buat Surat</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="site-footer">

    </footer>
@endsection

