@extends('theme-default.layouts.master')

@section('title', 'Giới Thiệu')
@section('description', setting('site.description'))

@section('fb_url', url('/'))
@section('fb_type', 'website')
@section('fb_title', 'Giới Thiệu - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
	<!-- Insert content here -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ Voyager::image(setting('about.about_page_banner')) }});">
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
            
            <!-- Company Stats  -->
            <div class="section-full bg-img-fix content-inner-1 overlay-black-dark our-projects-galery" style="background-image:url(images/background/bg3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-group"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">5000</span> + </h3>
                                    <h6>Khách Hàng</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-university"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">700</span> + </h3>
                                    <h6>Đối Tác</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-globe"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">245</span> + </h3>
                                    <h6>Sản Phẩm</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-trophy"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">648</span> + </h3>
                                    <h6>Giải Thưởng</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Company Stats END -->
            <!-- Our Awesome Services -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 text-center section-head">
								<h3 class="h3">Our Awesome Services</h3>
								<div class="dez-separator bg-primary"></div>
                                <div class="clear"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                    <div class="icon-bx-md radius bg-primary"><span class="icon-cell"><i class="fa fa-user-md" aria-hidden="true"></i></span></div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte">Our Best Doctor</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20  right m-r50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-ambulance" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte">Fast Ambulance Searvice</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-users" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte ">Well Qualified Staff</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 text-center ">
                                <div class="worker"> <img src="images/service-image.png" alt=""/> </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-stethoscope" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">24X7 Service</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-wheelchair" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">Health Care</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b10 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell"><i class="fa fa-medkit" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">Emergency Service</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Awesome Services END -->
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