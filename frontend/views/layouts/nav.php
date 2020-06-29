<?php
use yii\helpers\Url;

?>
 <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-9 col-sm-9">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@lopard3.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone-square"></i> +3234-7665545</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> Mon - Fri: 10:00 - 18:00</a></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="top-social">
								<ul>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
								</ul> 
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand " href="index-2.html">
                                    <img src="img/logo/logo2.png" alt="">
                                </a>
                            </div>
                            <!-- logo end -->
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option end -->
								<a class="s-menu" href="login.html">Get in Estimate</a>
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pagess" href="<?= Url::to(["site/index-2"])?>">Home</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to(["site/index-2"])?>">Home 01</a></li>
                                                    <li><a href="<?= Url::to(["site/index-3"])?>">Home 02</a></li>
                                                    <li><a href="<?= Url::to(["site/index-4"])?>">Home 03</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="#">Pages</a>
                                                <ul class="sub-menu">
                                                   <li><a href="<?= Url::to(["site/about"])?>">About</a></li>
                                                    <li><a href="<?= Url::to(["site/team"])?>">team</a></li>
                                                    <li><a href="<?= Url::to(["site/faq"])?>">FAQ</a></li>
                                                    <li><a href="<?= Url::to(["site/review"])?>">Review</a></li>
                                                    <li><a href="<?= Url::to(["site/pricing"])?>">Pricing</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to(["site/service"])?>">All services</a></li>
                                                    <li><a href="<?= Url::to(["site/single-service"])?>">Service-details</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="#">Works</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to(["site/project"])?>">Projects 01</a></li>
                                                    <li><a href="<?= Url::to(["site/project-2"])?>">Projects 02</a></li>
                                                    <li><a href="<?= Url::to(["site/single-project"])?>">Project details</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?= Url::to(["site/blog"])?>">Blog grid</a></li>
                                                    <li><a href="<?= Url::to(["site/blog-sidebar"])?>">Blog Sidebar</a></li>
                                                    <li><a href="<?= Url::to(["site/blog-details"])?>">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index-2.html"><img src="img/logo/logo2.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="pagess" href="index-2.html">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Home 01</a></li>
                                                <li><a href="index-3.html">Home 02</a></li>
                                                <li><a href="index-4.html">Home 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="pagess" href="#">Pages</a>
                                            <ul class="sub-menu">
                                               <li><a href="about.html">About</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="review.html">Review</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="pagess" href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">All services</a></li>
                                                <li><a href="single-service.html">Service-details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="pagess" href="#">Works</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.html">Projects 01</a></li>
                                                <li><a href="project-2.html">Projects 02</a></li>
                                                <li><a href="single-project.html">Project details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="pagess" href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog grid</a></li>
                                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>