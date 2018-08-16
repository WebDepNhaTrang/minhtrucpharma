@extends('theme-default.layouts.master')

@section('title', 'Liên Hệ')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.contact'))
@section('fb_type', 'website')
@section('fb_title', 'Liên Hệ - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
	<!-- Insert content here -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Liên Hệ</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('frontend.pages.home') }}">Trang Chủ</a></li>
                    <li>Liên Hệ</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							<h2>Liên Hệ Với Chúng Tôi</h2>
                            @if(Session::has('success'))
                                <div class="dzFormMsg">
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                            @endif
							<form method="post" class="dzForm" action="{{ route('store.thienpham.contact') }}">
							@csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="fullname" type="text" required class="form-control" placeholder="Họ Tên">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="email" type="email" class="form-control" required  placeholder="Email" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" type="text" required class="form-control" placeholder="Điện Thoại">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" required class="form-control" placeholder="Chủ Đề">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="msg" rows="4" class="form-control" required placeholder="Nội Dung"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button"> <span>Gửi</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-md-4">
                        <div class="p-a30 m-b30 border-1 contact-area">
							<h2 class="m-b10">Thông Tin Liên Hệ</h2>
							<p>Nếu bạn có bất kỳ câu hỏi nào, chỉ cần sử dụng các thông tin liên lạc sau đây.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Địa chỉ:</h6>
                                        <p>{{ setting('contact.address') }}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Email:</h6>
                                        <p>{{ setting('contact.email') }}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Điện thoại</h6>
                                        <p>{{ setting('contact.phone') }}</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dez-social-icon border dez-social-icon-lg">
									<li><a href="javascript:void(0);" class="fa fa-facebook bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
				<div class="row">
					<div class="col-md-12">
					<!-- Map part start -->
					<h2>Vị Trí Của Chúng Tôi</h2>
					<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:{{ setting('contact.google_place_id') }}&key=AIzaSyAqzbw4yIUcASpNWpMPiPCVFIV9GLbWYdE" allowfullscreen></iframe>
					<!-- Map part END -->
					</div>
				</div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
@endsection

@section('script')
    <!-- Insert script here -->
@endsection