@extends('theme-default.layouts.master')

@section('title', 'Minh Trúc')
@section('description', setting('site.description'))

@section('fb_url', url('/'))
@section('fb_type', 'website')
@section('fb_title', 'Minh Trúc - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-light" style="background-image:url({{ Voyager::image(setting('news.background')) }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{ setting('news.title') }}</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('frontend.pages.home') }}">Trang Chủ</a></li>
                    <li>Hoạt Động Nổi Bật</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        @php
            $posts = getPostByCategory('*', 1, 'created_at', 'desc', setting('news.paginate'));
        @endphp
        @if($posts->count()>0)
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div id="masonry" class="dez-blog-grid-3">
                        @foreach($posts as $v)
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="{{ route('frontend.pages.news-detail', ['slug' => $v->slug, 'id' => $v->id]) }}"><img src="{{ Voyager::image($v->image) }}" alt="{{ $v->title }}"></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="{{ route('frontend.pages.news-detail', ['slug' => $v->slug, 'id' => $v->id]) }}">{{ $v->title }}</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ $v->created_at->format('d-M') }}</strong> <span> {{ $v->created_at->format('Y') }}</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>Đăng bởi <a href="{{ route('frontend.pages.home') }}">Minh Trúc Pharma</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p class="excerpt">{{ shorten_text($v->excerpt, 200, '...', true) }}</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{ route('frontend.pages.news-detail', ['slug' => $v->slug, 'id' => $v->id]) }}" title="Xem Thêm" rel="bookmark" class="site-button-link">Xem Thêm<i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx col-lg-12 clearfix ">
                        {{ $posts->links() }}
                    </div>
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection