<!-- Footer -->
    <footer class="site-footer footer-overlay bg-img-fix" style="background-image: url({{ Voyager::image(setting('site.footer_bg')) }}); background-position: center bottom; background-size: cover; display: block; height: 500px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="{{ Voyager::image(setting('site.footer_logo')) }}" alt=""></div>
                            {!! setting('site.footer_info') !!}
                            <ul class="dez-social-icon border dez-social-icon-lg">
                                <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget recent-posts-entry">
                            <h4 class="m-b15 text-uppercase">Resent Post</h4>
                            <div class="dez-separator bg-primary"></div>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="images/blog/recent-blog/pic3.jpg" alt="" width="200" height="160"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title  text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Our services</h4>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                <li><a href="services-2.html">Emegency Care</a></li>
                                <li><a href="services-2.html">Operation Theater</a></li>
                                <li><a href="services-2.html">Medical Checkup</a></li>
                                <li><a href="services-2.html">Ddiagnostic Center</a></li>
                                <li><a href="services-2.html">Outdoor Checkup</a></li>
                                <li><a href="services-2.html">Pharmacy Servicea</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Contact us</h4>
                            <div class="dez-separator bg-primary"></div>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><strong>địa chỉ</strong> {{ setting('contact.address') }} </li>
                                <li><i class="fa fa-phone"></i><strong>điện thoại</strong> {{ setting('contact.phone') }} </li>
                                <li><i class="fa fa-envelope"></i><strong>email</strong> {{ setting('contact.email') }} </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-left"> <span>© 2018 Minh Trúc Pharma</span> </div>
                    <div class="col-md-4 text-center"> <span> Thiết kế và phát triển <i class="fa fa-heart text-primary heart"></i><br><a href="http://facebook.com/webdepnhatrang" target="_blank" class="designBy" title="thiết kế web tại Nha Trang, thiết kế web Khánh Hòa, web đẹp nha trang">KaTiSoft - Web Đẹp Nha Trang </a> </span> </div>
                    <div class="col-md-4 text-right "> <a href="{{ route('frontend.pages.home') }}"> Giới Thiệu</a> <a href="help.html"> Help Desk</a> <a href="privacy-policy.html"> Privacy Policy</a> </div>
                </div>
            </div>
        </div>
    </footer>


<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fa fa-chevron-up" ></button>