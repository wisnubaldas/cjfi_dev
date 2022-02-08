<header class="site-header header-style-4 style-1 mo-left">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="dez-topbar-left">
                        <ul class="social-line text-center pull-right">
                            <li><a href="javascript:void(0);"><i class="fa fa-map-marker"></i> <span> 8901 Marmora Road Chi Minh City, Vietnam </span> </a></li>
                        </ul>
                    </div>
                    <div class="dez-topbar-right">
                        <ul class="social-line text-center pull-right">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar END-->
        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container header-contant-block">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 d-flex">
                            <div class="logo-header align-self-center">
								<a href="index#"><img src="/cargo/images/logo.png" width="193" height="89" alt=""></a>
							</div>
                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <ul class="contact-info clearfix">
                                <li>
                                    <h6 class="text-primary"><i class="fa fa-phone"></i> Call Us</h6>
                                    <span>+141 0800-123456</span> </li>
                                <li>
                                    <h6 class="text-primary"><i class="fa fa-envelope-o"></i> Send us an Email</h6>
                                    <span>info@dexignzone.com</span> </li>
                                <li>
                                    <h6 class="text-primary"><i class="fa fa-clock-o"></i> Opening Time</h6>
                                    <span>Mon -Sat: 7:00 - 17:00</span> </li>
                                <li> 
									<a class="site-button m-r15 text-white text-center btn-block">
										<h5 class="m-a0">Coll Toll Free</h5>
										<p class="m-a0">+91 123 456 7890</p>
                                    </a> 
								</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slide-up">
                    <div class="container clearfix">
                        <!-- Website Logo -->
						<div class="logo-header mostion">
							<a href="#"><img src="/cargo/images/logo.png" width="193" height="89" alt=""></a>
						</div>
						<!-- Nav Toggle Button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
                        <!-- Extra Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Quik Search -->
                        <div class="dez-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                            </form>
                        </div>
                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse nav-dark justify-content-start" id="navbarNavDropdown">
                        @include('cargo.layout.menu')
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header END -->
    </header>