@extends('theme-default.layouts.master')

@section('title', 'Trang Chủ')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.home'))
@section('fb_type', 'website')
@section('fb_title', 'Trang Chủ - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
	<!-- Insert content here -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        @include('theme-default.partials.slider')
        <!-- Slider END -->
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
		<!-- Why Choose Us  -->
        <div class="section-full bg-img-fix content-inner overlay-primary-dark text-white" style="background-image:url({{ asset('images/background/bg9.jpg') }});">
            <div class="container">
                <div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-bar-chart text-white"></i>
								<span class="counter">7652</span>
							</div>
							<span class="counter-text">Completed Projects</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-social text-white"></i>
								<span class="counter">4562</span>
							</div>
							<span class="counter-text">Happy Clients</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-file text-white"></i>
								<span class="counter">3569</span>
							</div>
							<span class="counter-text">Questions Answered</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-pencil text-white"></i>
								<span class="counter">2089</span>
							</div>
							<span class="counter-text">Ordered Coffee's</span>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Why Choose Us END -->
		<!-- Product -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase"><span class="text-primary">Sản Phẩm</span> Tiêu Biểu</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img1.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img2.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img3.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img4.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img5.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img6.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img1.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 m-b30">
							<div class="dez-box p-a20 border-1 bg-gray">
								<div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="images/product/img2.jpg" alt="">
									<div class="overlay-bx">
										<div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
									</div>
								</div>
								<div class="dez-info p-t20 text-center">
									<h4 class="dez-title m-t0 text-uppercase"><a href="#">first heading</a></h4>
									<h2 class="m-b0">$20.00 </h2>
									<a href="javascript:void(0)" class="site-button  m-t15">Add To Cart</a> </div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Product END -->
        <!-- Our Project -->
        <div class="section-full bg-img-fix overlay-primary-dark content-inner-1 dez-support" style="background-image:url(images/background/bg9.jpg);">
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center text-white ">
						<h2 class="m-b15 m-t0">Chúng tôi hỗ trợ khách hàng 24/7</h2>
						<h3 class="m-t0 m-b20">Xin vui lòng liên hệ với chúng tôi theo số {{ setting('contact.phone') }}</h3>
						<a href="{{ route('frontend.pages.contact') }}" class="site-button white radius-sm">Liên Hệ</a>
					</div>
			   </div>
            </div>
        </div>
		<!-- Our Project END -->
		<!-- Latest Blog -->
		<div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Hoạt Động <span class="text-primary">Nổi Bật</span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content owl-none">
                    <div class="blog-carousel">
                        <div class="item">
							<div class="dez-box">
								<div class="dez-media"> 
									<a href="#"><img src="images/our-services/service/pic2.jpg" alt=""></a> 
								</div>
								<div class="dez-info p-a20 border-1">
									<div class="dez-post-meta ">
                                        <ul>
                                            <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a> </li>
                                        </ul>
                                    </div>
									<h4 class="dez-title m-t15"><a href="#">Provide qualtiy productivity..</a></h4>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dez-box">
								<div class="dez-media"> 
									<a href="#"><img src="images/our-services/service/pic3.jpg" alt=""></a> 
								</div>
								<div class="dez-info p-a20 border-1">
									<div class="dez-post-meta ">
                                        <ul>
                                            <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                        </ul>
                                    </div>
									<h4 class="dez-title m-t15"><a href="#">Provide qualtiy productivity..</a></h4>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dez-box">
								<div class="dez-media"> 
									<a href="#"><img src="images/our-services/service/pic4.jpg" alt=""></a> 
								</div>
								<div class="dez-info p-a20 border-1">
									<div class="dez-post-meta ">
                                        <ul>
                                            <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a> </li>
                                        </ul>
                                    </div>
									<h4 class="dez-title m-t15"><a href="#">Provide qualtiy productivity..</a></h4>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Blog END -->
		<!-- Testimoniay -->
		@php
			$testimonials = getAllTestimonials('*', 'created_at', 'asc')
		@endphp
		@if( $testimonials->count() > 0 )
		<div class="section-full owl-dots-style bg-img-fix md-testimonial"  style="background-image:url({{ asset('images/background/bg3.jpg') }}); background-size:cover;">
			<div class="container-fluid p-a0">
				<div class="section-content col-md-6 overlay-primary-dark content-inner-1 bg-img-fix " style="background-image:url(images/background/bg9.jpg);">
					<div class="testimonial-six relative z-index2">
						@foreach($testimonials as $v)
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="{{ Voyager::image($v->avatar) }}" width="100" height="100" alt="testimonial"></div>
								<div class="testimonial-text">
									{!! $v->content !!}
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">{{ $v->name }}</strong> <span class="testimonial-position">{{ $v->job }}</span> </div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
		@endif
		<!-- Testimoniay END -->
	</div>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection
    
