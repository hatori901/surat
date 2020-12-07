@extends('layouts.master')
@section('title','Profile')
@section('content')
    <div class="inner-banner">
        <span class="banner__shape-1"></span>
        <span class="banner__shape-2"></span>
        <span class="banner__shape-3"></span>
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Profile</a></li>
            </ul>
            <h2 class="inner-banner__title">Profile</h2>
        </div>
    </div>
    <div class="profile my-5">
        <div class="container">
            <div class="text-center">
                <img src="assets/images/profile/foto.jpg" class="img-fluid rounded-circle img-thumbnail" width="200" alt="">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" value="Erwin Alam Syah Putra" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sekolah">Sekolah</label>
                        <input type="text" class="form-control" value="SMK NEGERI 1 PURBALINGGA" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tmptlahir">Tempat Lahir</label>
                        <input type="text" class="form-control" value="Purbalingga" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tgllhr">Tanggal Lahir</label>
                        <input type="text" class="form-control" value="26 Desember 2003" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" value="Desa Banjarsari Kidul RT 05/01 Kec.Sokaraja, Banyumas, Jawa Tengah" readonly>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tgllhr">E-mail</label>
                        <input type="text" class="form-control" value="erwinalam4@gmail.com" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tmptlahir">Nomor Telepon</label>
                        <input type="text" class="form-control" value="+6285747036754" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection