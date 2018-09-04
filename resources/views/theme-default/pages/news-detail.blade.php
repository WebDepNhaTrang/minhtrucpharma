@extends('theme-default.layouts.master')

@section('title', $news->title)
@section('description', $news->meta_description)

@section('fb_url', route('frontend.pages.news-detail', ['slug' => $news->slug, 'id' => $news->id]))
@section('fb_type', 'website')
@section('fb_title', $news->title)
@section('fb_des', $news->meta_description)
@section('fb_img', Voyager::image($news->image))

@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-light" style="background-image:url({{ Voyager::image(setting('news.background')) }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Hoạt Động Nổi Bật</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('frontend.pages.home') }}">Trang Chủ</a></li>
                    <li>{{ $news->title }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dez-post-title ">
                        <h3 class="post-title"><a href="#">{{ $news->title }}</a></h3>
                    </div>
                    <div class="dez-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ $news->created_at->format('d-m-Y') }}</strong> </li>
                            <li class="post-author"><i class="fa fa-user"></i>Đăng bởi <a href="{{ route('frontend.pages.home') }}">Minh Trúc Pharma</a> </li>
                            
                        </ul>
                    </div>
                    <div class="dez-post-text">
                        {!! $news->body !!}
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    </div>
@endsection