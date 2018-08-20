<!-- Footer -->
<footer class="site-footer footer-overlay bg-img-fix" style="background-image: url({{ Voyager::image(setting('site.footer_bg')) }}); background-position: center top; background-size: cover; display: block;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="{{ Voyager::image(setting('site.footer_logo')) }}" alt=""></div>
                            {!! setting('site.footer_info') !!}
                            <ul class="dez-social-icon border dez-social-icon-lg">
                                <li><a href="{{ setting('site.social_facebook') }}" class="fa fa-facebook fb-btn"></a></li>
                                <li><a href="{{ route('frontend.pages.home') }}" class="fa fa-twitter tw-btn"></a></li>
                                <li><a href="{{ route('frontend.pages.home') }}" class="fa fa-linkedin link-btn"></a></li>
                                <li><a href="{{ route('frontend.pages.home') }}" class="fa fa-pinterest-p pin-btn"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                       
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Liên Hệ</h4>
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
                    <div class="col-md-4 text-center"> <span> Thiết kế và phát triển <i class="fa fa-heart text-primary heart"></i><br><a href="https://webdepnhatrang.com" target="_blank" class="designBy" title="thiết kế web tại Nha Trang, thiết kế web Khánh Hòa, web đẹp nha trang">KaTiSoft - Web Đẹp Nha Trang </a> </span> </div>
                    <div class="col-md-4 text-right "> <a href="{{ route('frontend.pages.about') }}"> Giới Thiệu</a> | <a href="{{ route('frontend.pages.news') }}"> Hoạt Động</a> | <a href="{{ route('frontend.pages.recruitment') }}"> Tuyển Dụng</a></div>
                </div>
            </div>
        </div>
    </footer>


<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fa fa-chevron-up" ></button>