<?php
    // echo "<pre>";
    // print_r($product);
    // echo "</pre>";
    // die();
?>
@extends('theme-default.layouts.master')

@section('title', $product->name)
@section('description', $product->name)

@section('fb_url', route('frontend.pages.product-detail', ['slug' => $product->slug, 'id' => $product->id]))
@section('fb_type', 'website')
@section('fb_title', $product->name)
@section('fb_des', $product->name)
@section('fb_img', Voyager::image($product->image))

@section('content')
<div class="content-area">
    <!-- Product details -->
    <div class="container woo-entry">
        <div class="row m-b30">
            <div class="blog-post blog-md date-style-2">
                <div class="col-md-4 col-sm-4 m-b30"> <a href="#"><img src="{{ Voyager::image($product->image) }}" alt="{{ $product->name }}"></a> </div>
                <div class="col-md-8 col-sm-8">
                    <div class="dez-post-title ">
                        <h3 class="post-title" style="font-size: 40px; height: auto; overflow: unset; line-height:40px;"><a href="#">{{ $product->name }}</a></h3>
                    </div>
                    
                    <div class="dez-post-text">
                        {!! $product->excerpt !!}
                    </div>
                    <table class="table table-bordered" >
                        <tr>
                            <td>Giá</td>
                            <td>Liên Hệ Với Chúng Tôi</td>
                        </tr>
                        <tr>
                            <td>Trạng Thái</td>
                            <td>Có Sẵn</td>
                        </tr>
                        <tr>
                            <td>Đánh Giá</td>
                            <td><span class="rating-bx"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dez-tabs border-top product-description bg-tabs">
                    <ul class="nav nav-tabs ">
                        <li class="active"><a data-toggle="tab" href="#web-design-1"><i class="fa fa-globe"></i> Mô Tả</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="web-design-1" class="tab-pane active">
                            {!! $product->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product details -->
</div>
@endsection