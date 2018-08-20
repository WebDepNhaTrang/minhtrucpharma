@extends('theme-default.layouts.master')

@section('title', 'Minh Trúc')
@section('description', setting('site.description'))

@section('fb_url', url('/'))
@section('fb_type', 'website')
@section('fb_title', 'Minh Trúc - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
	<!-- Insert content here -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-light" style="background-image:url({{ Voyager::image(setting('about.about_page_banner')) }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Giới Thiệu</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('frontend.pages.home') }}">Trang Chủ</a></li>
                    <li>Giới Thiệu</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="clearfix">
            <!-- About Company -->
            <div class="section-full content-inner bg-white">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="h3 text-uppercase">Về<span class="text-primary"> Chúng Tôi</span></h3>
                                {!! setting('about.st_about_content') !!}
                            </div>
                            <div class="col-md-5">
                                <div class="dez-thum disnone-sm"><img src="{{ Voyager::image(setting('about.st_about_image')) }}" alt="Minh Trúc Pharma"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company END -->
        
            <!-- Testimonials -->
            @php
			$testimonials = getAllTestimonials('*', 'created_at', 'asc')
            @endphp
            @if( $testimonials->count() > 0 )
            <div class="section-full bg-img-fix content-inner overlay-black-dark testimonials" style="background-image:url(images/background/bg3.jpg);">
                <div class="container">
                    <div class="section-head text-center text-white">
                        <h3 class="h3">{{ setting('about.st_testimonial_title') }}</h3>
                        <div class="dez-separator bg-primary"></div>
                        <p>{{ setting('about.st_testimonial_description') }}</p>
                    </div>
                    <div class="section-content">
                        <div class="testimonial-five">
                            @foreach($testimonials as $v)
                            <div class="item">
                                <div class="testimonial-6">
                                    <div class="testimonial-text bg-white quote-left quote-right">
                                    {!! $v->content !!}
                                    </div>
                                    <div class="testimonial-detail clearfix bg-primary text-white">
                                        <h4 class="testimonial-name m-tb0">{{ $v->name }}</h4>
                                        <span class="testimonial-position">{{ $v->job }}</span>
                                        <div class="testimonial-pic radius"><img src="{{ Voyager::image($v->avatar) }}" alt="testimonial" width="100" height="100"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- Testimonials End -->
        </div>
        <!-- contact area END -->
    </div>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection