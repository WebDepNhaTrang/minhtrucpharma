@extends('theme-default.layouts.master')

@section('title', $page->title)
@section('description', $page->meta_description)

@section('fb_url', route('frontend.pages.recruitment'))
@section('fb_type', 'website')
@section('fb_title', $page->title)
@section('fb_des', $page->meta_description)
@section('fb_img', Voyager::image($page->image))

@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ Voyager::image(setting('recruitment.banner')) }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Tuyển Dụng</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('frontend.pages.home') }}">Trang Chủ</a></li>
                    <li>{{ $page->title }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dez-post-title ">
                        <h3 class="post-title"><a href="#">{{ $page->title }}</a></h3>
                    </div>
                    <div class="dez-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ $page->created_at->format('d-m-Y') }}</strong> </li>
                            <li class="post-author"><i class="fa fa-user"></i>Đăng bởi <a href="{{ route('frontend.pages.home') }}">Minh Trúc Pharma</a> </li>
                            
                        </ul>
                    </div>
                    <div class="dez-post-text">
                        {!! $page->body !!}
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    </div>
@endsection