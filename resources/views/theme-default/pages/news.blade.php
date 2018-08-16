@extends('theme-default.layouts.master')

@section('title', 'Hoạt Động Nổi Bật')
@section('description', setting('site.description'))

@section('fb_url', url('/'))
@section('fb_type', 'website')
@section('fb_title', 'Hoạt Động Nổi Bật - Minh Trúc Pharma')
@section('fb_des', setting('site.description'))
@section('fb_img', '')

@section('content')
<div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
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
                    <li>Hoạt Động Nổi Bật</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div id="masonry" class="dez-blog-grid-3">
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                    <div class="dez-post-tags">
                                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                    <div class="dez-post-tags">
                                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                    <div class="dez-post-tags">
                                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                    <div class="dez-post-tags">
                                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                    <div class="dez-post-tags">
                                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h3 class="post-title"><a href="#">Title of first blog post</a></h3>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                    <div class="dez-post-tags">
                                        <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx col-lg-12 clearfix ">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
@endsection