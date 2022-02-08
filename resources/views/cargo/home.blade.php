@extends('cargo.layout.index',['page'=>'home'])
@section('content')
<div class="page-content bg-white">
        <!-- Slider -->
        @include('cargo.layout.slider')

        <!-- Slider END -->
        <!-- Our Service Box -->
        <div class="section-full our-service p-b10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="icon-bx-wraper text-center service-box p-a30 bg-white skew-angle">
                            <div class="icon-lg radius"> <span class="icon-cell"><i class="fa fa-plane"></i></span> </div>
                            <div class="icon-content">
                                <h4 class="m-b0 m-t10">Air Frieght</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="icon-bx-wraper text-center service-box p-a30 bg-white skew-angle">
                            <div class="icon-lg radius"> <span class="icon-cell"><i class="fa fa-ship"></i></span> </div>
                            <div class="icon-content">
                                <h4 class="m-b0 m-t10">Sea Frieght</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="icon-bx-wraper text-center service-box p-a30 bg-white skew-angle">
                            <div class="icon-lg radius"> <span class="icon-cell"><i class="fa fa-train"></i></span> </div>
                            <div class="icon-content">
                                <h4 class="m-b0 m-t10">Train Frieght</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="icon-bx-wraper text-center service-box p-a30 bg-white skew-angle">
                            <div class="icon-lg radius"> <span class="icon-cell"><i class="fa fa-truck"></i></span> </div>
                            <div class="icon-content">
                                <h4 class="m-b0 m-t10">Road Frieght</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Service Box End -->
        <!-- Our Service -->
        <div class="section-full awesome-services bg-white p-t50 p-b40">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center section-head">
                            <h3 class="h3">Our Services</h3>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect zoom"> <img src="/cargo/images/our-work/pic1.jpg" alt="">
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-md text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-shopping-basket"></i></a> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5">Import Export Goods</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                                <a href="services-1.html" class="site-button-link">Read More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect zoom"> <img src="/cargo/images/our-work/pic2.jpg" alt="">
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-md text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-truck"></i></a> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5">Fast Delivery Network</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                                <a href="services-1.html" class="site-button-link">Read More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect zoom"> <img src="/cargo/images/our-work/pic3.jpg" alt="">
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-md text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5">Well Qualified Staff</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                                <a href="services-1.html" class="site-button-link">Read More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect zoom"> <img src="/cargo/images/our-work/pic4.jpg" alt="">
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-md text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-user"></i></a> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5">User Friendly</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                                <a href="services-1.html" class="site-button-link">Read More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect zoom"> <img src="/cargo/images/our-work/pic5.jpg" alt="">
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-md text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-laptop"></i></a> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5">Lifetime Support</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                                <a href="services-1.html" class="site-button-link">Read More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box m-b30">
                                <div class="dez-media dez-img-effect zoom"> <img src="/cargo/images/our-work/pic6.jpg" alt="">
                                    <div class="dez-info-has p-a20 bg-secondry no-hover">
                                        <div class="icon-bx-wraper center">
                                            <div class="icon-md text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="fa fa-gift"></i></a> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte m-b5">Great Discounts</h3>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</p>
                                                <a href="services-1.html" class="site-button-link">Read More</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
        <!-- Request A Quote -->
        <div class="section-full text-white bg-img-fix p-t70 p-b40 overlay-black-middle request-a-quote choose-us" style="background-image:url(/cargo/images/background/bg2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-left">
                            <h3 class="h3">Request A Quote</h3>
                            <div class="dez-separator bg-primary"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="p-t10 p-b20 clearfix">
                            <form method="post" class="dzForm" action="script/contact.php">
                                <input type="hidden" value="Appoinment" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="dzName" class="form-control" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="dzEmail" class="form-control" placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="dzOther[date]" class="form-control" type="date">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="bs-select-hidden" name="dzOther[service]">
                                                <option value="Yoda">Yoda</option>
                                                <option value="Wait Loss">Wait Loss</option>
                                                <option value="Cardio">Cardio</option>
                                                <option value="Gym">Gym</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="dzFormMsg"></div>
                                        <button name="Reset" value="Reset" type="reset" class="site-button m-r5 skew-secondry">
											<span>Reset</span>
										</button>
                                        <button name="submit" type="submit" value="Submit" class="site-button skew-secondry">
											<span>Submit</span>
										</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request A Quote End -->
        <!-- Team member -->
        <div class="section-full bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="h2">Meet Our Team</h2>
                    <div class="dez-separator bg-primary"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="javascript:void(0);"><img src="/cargo/images/our-team/pic1.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 p-t40 border-1">
                                    <h4 class="dez-title m-tb0"><a href="javascript:void(0);">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon">
                                            <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                        </ul>
                                    </div>
                                    <span>Senor Vice President</span>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="javascript:void(0);"><img src="/cargo/images/our-team/pic2.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 p-t40 border-1">
                                    <h4 class="dez-title m-tb0"><a href="javascript:void(0);">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon">
                                            <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                        </ul>
                                    </div>
                                    <span>Senor Vice President</span>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="javascript:void(0);"><img src="/cargo/images/our-team/pic3.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 p-t40 border-1">
                                    <h4 class="dez-title m-tb0"><a href="javascript:void(0);">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon">
                                            <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                        </ul>
                                    </div>
                                    <span>Senor Vice President</span>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member -->
        <!-- Company Stats  -->
        <div class="section-full bg-img-fix p-t70 p-b40 overlay-black-dark our-projects-galery" style="background-image:url(/cargo/images/background/bg3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="icon-bx-wraper center text-white">
                            <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-group"></i></span> </div>
                            <div class="m-t10">
                                <div class="dez-separator bg-primary"></div>
                            </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte text-uppercase h2"> <span class="counter">5000</span> + </h2>
                                <h6>Passionate Employee</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="icon-bx-wraper center text-white">
                            <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-university"></i></span> </div>
                            <div class="m-t10">
                                <div class="dez-separator bg-primary"></div>
                            </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte text-uppercase h2"> <span class="counter">700</span> + </h2>
                                <h6>Offices in Worldwide</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="icon-bx-wraper center text-white">
                            <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-globe"></i></span> </div>
                            <div class="m-t10">
                                <div class="dez-separator bg-primary"></div>
                            </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte text-uppercase h2"> <span class="counter">245</span> + </h2>
                                <h6>Modern Cargo Trucks</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="icon-bx-wraper center text-white">
                            <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-trophy"></i></span> </div>
                            <div class="m-t10">
                                <div class="dez-separator bg-primary"></div>
                            </div>
                            <div class="icon-content">
                                <h2 class="dez-tilte text-uppercase h2"> <span class="counter">648</span> + </h2>
                                <h6>International Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company Stats END -->
        <!-- Latest blog -->
        <div class="section-full bg-white p-t70 p-b40">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="h2">Meet Our Latest Blog</h2>
                    <div class="dez-separator bg-primary"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="javascript:void(0);"><img src="/cargo/images/our-work/pic4.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 p-t40 border-1">
                                    <h4 class="dez-title m-tb0"><a href="javascript:void(0);">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon latest-blog-date">
                                            <li><a href="javascript:void(0);" class="m-r15"><i class="fa fa-clock-o m-r5"></i> June 26, 2015</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-user m-r5"></i> By Admin</a></li>
                                        </ul>
                                    </div>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius. <a href="blog-single.html" class="site-button-link text-primary">Read More</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="javascript:void(0);"><img src="/cargo/images/our-work/pic2.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 p-t40 border-1">
                                    <h4 class="dez-title m-tb0"><a href="javascript:void(0);">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon latest-blog-date">
                                            <li><a href="javascript:void(0);" class="m-r15"><i class="fa fa-clock-o m-r5"></i> June 26, 2015</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-user m-r5"></i> By Admin</a></li>
                                        </ul>
                                    </div>
									<p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius. <a href="blog-single.html" class="site-button-link text-primary">Read More</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media"> <a href="javascript:void(0);"><img src="/cargo/images/our-work/pic3.jpg" alt=""></a> </div>
                                <div class="dez-info p-a20 p-t40 border-1">
                                    <h4 class="dez-title m-tb0"><a href="javascript:void(0);">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="dez-social-icon latest-blog-date">
                                            <li><a href="javascript:void(0);" class="m-r15"><i class="fa fa-clock-o m-r5"></i> June 26, 2015</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-user m-r5"></i> By Admin</a></li>
                                        </ul>
                                    </div>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius. <a href="blog-single.html" class="site-button-link text-primary">Read More</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
        <!-- Testimonials -->
        <div class="section-full bg-img-fix p-t70 p-b40 overlay-black-dark" style="background-image:url(/cargo/images/background/bg3.jpg);">
            <div class="container">
                <div class="section-head text-center text-white">
                    <h2 class="h2"> What Are Customer Saying</h2>
                    <div class="dez-separator bg-primary"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content">
                    <div class="testimonial-five owl-carousel owl-none">
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-text bg-white quote-left quote-right">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                </div>
                                <div class="testimonial-detail clearfix bg-primary text-white">
                                    <h4 class="testimonial-name m-tb0">David Matin</h4>
                                    <span class="testimonial-position">Student</span>
                                    <div class="testimonial-pic radius"><img src="/cargo/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-6">
                                <div class="testimonial-text bg-white quote-left quote-right">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a Gallery of type and scrambled it to make.</p>
                                </div>
                                <div class="testimonial-detail clearfix bg-primary text-white">
                                    <h4 class="testimonial-name m-tb0">David Matin</h4>
                                    <span class="testimonial-position">Student</span>
                                    <div class="testimonial-pic radius"><img src="/cargo/images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
</div>
@endsection()
@push('css')
<!-- REVOLUTION SLIDER CSS -->
<link rel="stylesheet" type="text/css" href="/cargo/plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="/cargo/plugins/revolution/revolution/css/navigation.css">
@endpush()