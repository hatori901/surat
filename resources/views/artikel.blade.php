@extends('layouts.master')
@section('title','Artikel')
@section('content')
    <div class="inner-banner">
        <span class="banner__shape-1"></span>
        <span class="banner__shape-2"></span>
        <span class="banner__shape-3"></span>
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="#">Artikel</a></li>
            </ul>
            <h2 class="inner-banner__title">Artikel</h2>
        </div>
    </div>
    <div class="posts my-5">
        <div class="container">
            <div class="row mx-auto">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                        <div class="post shadow">
                            <h2>{{ $post->title }}</a></h2>
                            <p>
                                {{ Str::words($post->content,20) }}
                            </p>
                            <a href="artikel/post/{{ $post->id }}">Lanjutkan Membaca <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection