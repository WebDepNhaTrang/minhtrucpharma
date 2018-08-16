<!-- header -->
<header class="site-header header header-style-4 style-1">
        <div class="bg-white">
			<div class="container header-contant-block">
				<div class="row">
					<div class="col-md-4">
						<div class="logo-header "><a href="{{ route('frontend.pages.home') }}"><img src="{{ Voyager::image(setting('site.logo')) }}" width="193" height="89" alt=""></a></div>
					</div>
					<div class="col-md-8">
						<ul class="contact-info style-1 clearfix text-primary">
							<li>
								<h6 class="text-primary"><i class="fa fa-phone"></i> Điện Thoại</h6>
								<span>{{ setting('contact.phone') }}</span> 
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-envelope-o"></i> Email Liên Hệ</h6>
								<span>{{ setting('contact.email') }}</span> 
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-clock-o"></i> Giờ Mở Cửa</h6>
								<span>{{ setting('contact.business_hours') }}</span> 
							</li>
							<li>
								<h6 class="text-primary"><i class="fa fa-phone"></i>Tư Vẫn Miễn Phí</h6>
								<span>{{ setting('contact.phone') }}</span> 
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="navigation-bar bg-primary">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion"><a href="index.html"><img src="images/logo-white1.png" width="193" height="89" alt=""></a></div>
                        <!-- nav toggle button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <!-- extra nav -->
                        <!-- <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button white"><i class="fa fa-search"></i></button>
                            </div>
                        </div> -->
                        <!-- Quik search -->
                        <div class="dez-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                            </form>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse">
                            {{ menu('frontend', 'theme-default.partials.main-menu') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->