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
                            <h3 class="h3 text-uppercase">About<span class="text-primary"> Us</span></h3>
                            <p class="m-b10"><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</strong></p>
							<p class="m-b30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
							<p class="m-b10"><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</strong></p>
							<p class="m-b30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
							<p class="m-b10"><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</strong></p>
							<p class="m-b30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
							<p class="m-b10"><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</strong></p>
                            <p class="m-b30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            
                        </div>
                        <div class="col-md-5">
                            <div class="dez-thum disnone-sm"><img src="images/worker.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
		<!-- Why Choose Us  -->
        <div class="section-full bg-img-fix content-inner overlay-primary-dark text-white" style="background-image:url(images/background/bg9.jpg);">
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
		<!-- Services -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3 text-uppercase">Our Best <span class="text-primary">Services</span></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="images/our-services/service/pic1.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Dental Fillings</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="images/our-services/service/pic2.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Orthodontics</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="images/our-services/service/pic3.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Tooth Extraction</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="images/our-services/service/pic4.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Root Canal Treatment</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="images/our-services/service/pic5.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Teeth Whitening</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 m-b30">
							<div class="dez-box">
								<div class="dez-media"> <a href="#"><img src="images/our-services/service/pic6.jpg" alt=""></a> </div>
								<div class="dez-info p-a30 border-1">
									<h4 class="dez-title m-t0"><a href="#">Routine Dental Exam</a></h4>
									<div class="dez-separator bg-primary"></div>
									<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
									<a href="#" class="site-button-link black">Read More <i class="fa fa-long-arrow-right"></i></a> 
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- Services END -->
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
        <!-- Testimoniay -->
		<div class="section-full owl-dots-style bg-img-fix md-testimonial"  style="background-image:url(images/background/bg3.jpg); background-size:cover;">
			<div class="container-fluid p-a0">
				<div class="section-content col-md-6 overlay-primary-dark content-inner-1 bg-img-fix " style="background-image:url(images/background/bg9.jpg);">
					<div class="testimonial-six relative z-index2">
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-1 testimonial-bg">
								<div class="testimonial-pic quote-left radius shadow"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimoniay END -->
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
		<div class="section-full bg-primary overlay-primary-dark bg-img-fix" style="background-image:url(images/background/bg9.jpg);">
			<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-6 ov-white1 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-clock-o"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">CALL CENTER 24/7</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ov-white2 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-user"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">Professional staff</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ov-white3 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-pencil"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">Modern Equipment</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 ov-white4 text-white">
					<div class="icon-bx-wraper p-a40 center">
						<div class="icon-md m-b20"> <span class="icon-cell"><i class="fa fa-file-text"></i></span> </div>
						<div class="icon-content">
							<h5 class="dez-tilte text-uppercase">ONLINE APPOINTMENT</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
        <!-- Content END-->
	</div>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection
    
