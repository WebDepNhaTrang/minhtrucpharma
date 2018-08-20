@extends('theme-default.layouts.master')

@section('title', 'Minh Trúc')
@section('description', setting('site.description'))

@section('fb_url', route('frontend.pages.product'))
@section('fb_type', 'website')
@section('fb_title', 'Minh Trúc - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Sản Phẩm</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('frontend.pages.home') }}">Trang Chủ</a></li>
                <li>Sản Phẩm</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="content-area">
        <!-- Product -->
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
        <!-- Product END -->
    </div>
    <!-- contact area  END -->
</div>
@endsection