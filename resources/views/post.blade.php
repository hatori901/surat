@extends('layouts.master')
@section('title','Post')
@section('content')
    <div class="inner-banner">
        <span class="banner__shape-1"></span>
        <span class="banner__shape-2"></span>
        <span class="banner__shape-3"></span>
        <div class="container">
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/artikel">Artikel</a></li>
                <li class="active"><a href="#">Post</a></li>
            </ul>
            <h2 class="inner-banner__title">{{ $post->title }}</h2>
        </div>
    </div>
    <div class="content">
        <div class="container my-5">
            <div class="inner__content">
                <strong>{{ $post->title }}</strong> - {{ $post->content }}
            </div>
        </div>
    </div>

@endsection