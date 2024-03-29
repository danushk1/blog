





<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Community - Multipurpose Saas Landing Page</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/swiper/css/swiper.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/wow/css/animate.css" type="text/css">
    <link rel="stylesheet" href="dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">
    <link rel="stylesheet" href="dependencies/themify-icons/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
    <link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css" type="text/css">


    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600,700,800%7CPoppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>



    @include('layouts.sections.header.header')



    


    <section class="banner banner-saas-main">

<div class="banner-sass-svg-bg">
    <svg class="saas-banner-bg" viewBox="0 0 1920 1050" preserveAspectRatio="none" width="1920px" height="1050px">
        <path class="animesvg" fill-rule="evenodd" fill="rgb(245, 252, 251)" d="M0.000,0.000 L1920.000,0.000 L1920.000,171.464 C1920.000,171.464 1622.206,148.593 1397.000,514.999 C1289.105,690.543 1055.400,965.382 671.951,927.320 C525.423,912.775 403.698,878.648 248.950,900.105 C66.121,925.456 0.000,1049.999 0.000,1049.999 L0.000,0.000 Z" />
    </svg>
</div>
<!-- /.banner-sass-svg-bg -->
<div class="container">
    <div class="banner-content-wrapper">
        <div class="row align-items-center">
            <div class="col-lg-6 mw-600 gpt-order-2">
                <div class="banner-content-sass">
                    <h3 class="subtitle-top wow fadeInUp">Unique & Mordern Design By <a href="#">GP Theme</a></h3>
                    <h1 class="banner-title wow  fadeInUp" data-wow-delay="0.3s">
                        Unique and powerful<br> suite of software.
                    </h1>

                    <p class="description wow  fadeInUp" data-wow-delay="0.5s">
                        Say mush chap smashing blower the bbc faff about have it on your bike mate off his nut hunky.
                    </p>

                    <a href="#category-section" class="gp-btn banner-btn color-three wow  fadeInUp" data-wow-delay="0.7s"> Explore More</a>
                </div>
                <!-- /.banner-content-sass -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="saas-animate-image">
                    <div id="svgContainer" class="wow zoom"></div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.banner-content-wrapper -->
</div>
<!-- /.container -->
</section>
<!-- /.banner -->

<!--===============================-->
<!--=         Category         =-->
<!--===============================-->
<section class="category" id="category-section">
<div class="container">
    <div class="section-heading style-three">
        <h3 class="subtitle wow fadeInUp">Why Choose The Saas</h3>
        <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">A simple, proven way to boost<br> your team performance.</h2>
    </div>
    <!-- /.section-heading -->


    <div class="category-items">
        <div class="categories-box wow fadeInRight" data-wow-delay="0.5s">
            <div class="box-icon">
                <img src="media/feature/17.png" alt="icon">
            </div>

            <h3 class="category-title">
                <a href="service-two.html">App Dashboard</a>
            </h3>
        </div>
        <!-- /.categories-box -->

        <div class="categories-box color-two wow fadeInRight" data-wow-delay="0.6s">
            <div class="box-icon">
                <img src="media/feature/18.png" alt="icon">
            </div>

            <h3 class="category-title">
                <a href="service-two.html">Advanced Reporting</a>
            </h3>
        </div>
        <!-- /.categories-box -->

        <div class="categories-box color-three wow fadeInRight" data-wow-delay="0.7s">
            <div class="box-icon">
                <img src="media/feature/19.png" alt="icon">
            </div>

            <h3 class="category-title">
                <a href="service-two.html">Track Time</a>
            </h3>
        </div>
        <!-- /.categories-box -->

        <div class="categories-box color-four wow fadeInRight" data-wow-delay="0.8s">
            <div class="box-icon">
                <img src="media/feature/20.png" alt="icon">
            </div>

            <h3 class="category-title">
                <a href="service-two.html">Instant Messaging</a>
            </h3>
        </div>
        <!-- /.categories-box -->

        <div class="categories-box color-five wow fadeInRight" data-wow-delay="0.9s">
            <div class="box-icon">
                <img src="media/feature/21.png" alt="icon">
            </div>

            <h3 class="category-title">
                <a href="service-two.html">UX Saas Design</a>
            </h3>
        </div>
        <!-- /.categories-box -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /.category -->

<!--========================================-->
<!--=         Feature With Content         =-->
<!--========================================-->
<section class="image-content">
<div class="container">
    <div class="row mb-75">
        <div class="col-lg-7">
            <div class="anime-image-wrapper">
                <div class="feature-image-wrap ml--55">
                    <img src="media/feature/image1.png" class="wow zoom" alt="astriol feature">
                </div>

                <span class="circle" data-parallax='{"y": -70}'></span>

                <div class="anime-dot">
                    <img src="media/feature/dot.png" alt="astrion dot">
                </div>
            </div>
            <!-- /.anime-image-wrapper -->
        </div>
        <!-- /.col-md-6 -->

        <div class="col-lg-5">
            <div class="image-content-wrapper style-three">
                <h2 class="title wow fadeInUp">A simple, proven way to boost your team performance.</h2>

                <p class="wow fadeInUp" data-wow-delay="0.3s">
                    So I said gosh pear shaped cockup no biggie bog standar Harry he nicked it barmy.!
                </p>

                <ul class="listitem wow fadeInUp" data-wow-delay="0.5s">
                    <li><i class="ei ei-icon_check"></i>Create unique websites</li>
                    <li><i class="ei ei-icon_check"></i> Automate your busy work</li>
                    <li><i class="ei ei-icon_check"></i>Optimize all your efforts</li>
                </ul>

                <a href="service.html" class="gp-btn btn-outline color-three wow fadeInUp" data-wow-delay="0.5s">How it Works</a>
            </div>
            <!-- /.image-content-wrapper -->
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-5 order-md">
            <div class="image-content-wrapper style-three">
                <h2 class="title wow fadeInUp">Advanced reporting. Track progress at a glance.</h2>

                <p class="wow fadeInUp" data-wow-delay="0.3s">
                    So I said gosh pear shaped cockup no biggie bog standar Harry he nicked it barmy.!
                </p>

                <ul class="listitem wow fadeInUp" data-wow-delay="0.5s">
                    <li><i class="ei ei-icon_check"></i>Create unique websites</li>
                    <li><i class="ei ei-icon_check"></i> Automate your busy work</li>
                    <li><i class="ei ei-icon_check"></i>Optimize all your efforts</li>
                </ul>

                <a href="service.html" class="gp-btn color-three wow fadeInUp" data-wow-delay="0.5s">How it Works</a>
            </div>
            <!-- /.image-content-wrapper -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-7">
            <div class="anime-image-wrapper style-two">
                <div class="feature-image-wrap mr--50">
                    <img src="media/feature/image2.png" class="wow zoom" data-wow-delay="0.3s" alt="astriol feature">
                </div>

                <span class="circle" data-parallax='{"y": 60}'></span>

                <div class="anime-dot">
                    <img src="media/feature/dot2.png" alt="astrion dot">
                </div>
            </div>
            <!-- /.anime-image-wrapper -->
        </div>
        <!-- /.col-md-6 -->

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /.image-content -->

<!--=========================-->
<!--=         Video         =-->
<!--=========================-->
<section class="intro-video-two">
<div class="row align-items-center">
    <div class="col-lg-6">
        <div class="popup-video-warapper-two">
            <div class="intro-video-inner">
                <img src="media/feature/22.jpg" alt="intro video">
                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-video style-two wow pixFadeUp" data-wow-delay="0.6s"><i class="fa fa-play"></i></a>
            </div>
            <!-- /.intro-video -->
        </div>
    </div>
    <!-- /.col-lg-6 -->

    <div class="col-lg-6">
        <div class="video-content-wrapper-two">
            <h2 class="title wow fadeInUp">
                Youl’ll never miss a<br> minute, ever.
            </h2>

            <p class="wow fadeInUp" data-wow-delay="0.3s">
                The wireless blow off cup of char twit cheesed off cobblers <br> say blatant, easy peasy in my flat bits and bobs blimey it's <br> all gone to pot have it oxford william.!
            </p>

            <div class="people-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="avatar">
                    <img src="media/feature/23.jpg" alt="peaple">
                </div>

                <p>
                    "Do one show off show off pick."
                </p>
            </div>

            <div class="counter-box-wrapper">
                <div class="counter-box style-three wow fadeInUp" data-wow-delay="0.6s">
                    <div class="count">
                        <h2 class="counted" data-counter="96">95</h2>
                        <span>%</span>
                    </div>
                    <p class="count-title">Average satisfaction rating<br> received in the past year</p>
                </div>

                <div class="counter-box style-three wow fadeInUp" data-wow-delay="0.6s">
                    <div class="count">
                        <h2 class="counted" data-counter="164">164</h2>
                        <span>k+</span>
                    </div>
                    <p class="count-title">App installs from the two major<br> mobile app stores</p>
                </div>
            </div>
            <!-- /.counter-box-wrapper -->
        </div>
        <!-- /.video-content-wrapper -->

    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<!-- /.popup-video-arapper -->

</section>
<!-- /.intro-video -->

<!--============================-->
<!--=         Feature         =-->
<!--============================-->
<section id="feature">
<div class="container">
    <div class="section-heading style-three">
        <h3 class="subtitle wow fadeInUp">Accessible Across</h3>
        <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">Get work done in over 600+<br> different categories</h2>
    </div>
    <!-- /.section-heading -->

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="icon-box style-five cl-five color-one wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon-container">
                    <i class="icon-briefcase icons"></i>
                </div>

                <div class="box-content">
                    <h3 class="box-title">
                        <a href="service.html">Online Appointment</a>
                    </h3>

                    <p>
                        So I said twit is cheers gosh and brilliant burke gormless, crikey cheeky wind up morish cup of tea blower.!
                    </p>
                </div>
            </div>
            <!-- /.icon-box style-five -->
        </div>
        <!-- /.col-lg-4 col-md-6 col-sm-6 -->

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="icon-box style-five cl-five color-two wow fadeInRight" data-wow-delay="0.4s">
                <div class="icon-container">
                    <i class="icon-people icons"></i>
                </div>

                <div class="box-content">
                    <h3 class="box-title">
                        <a href="service.html">Team Management</a>
                    </h3>

                    <p>
                        So I said twit is cheers gosh and brilliant burke gormless, crikey cheeky wind up morish cup of tea blower.!
                    </p>
                </div>
            </div>
            <!-- /.icon-box style-five -->
        </div>
        <!-- /.col-lg-4 col-md-6 col-sm-6 -->

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="icon-box style-five cl-five color-three wow fadeInRight" data-wow-delay="0.5s">
                <div class="icon-container">
                    <i class="icon-emotsmile icons"></i>
                </div>

                <div class="box-content">
                    <h3 class="box-title">
                        <a href="service.html">Customer Portal</a>
                    </h3>

                    <p>
                        So I said twit is cheers gosh and brilliant burke gormless, crikey cheeky wind up morish cup of tea blower.!
                    </p>
                </div>
            </div>
            <!-- /.icon-box style-five -->
        </div>
        <!-- /.col-lg-4 col-md-6 col-sm-6 -->

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="icon-box style-five cl-five color-four wow fadeInRight" data-wow-delay="0.6s">
                <div class="icon-container">
                    <i class="icon-docs icons"></i>
                </div>

                <div class="box-content">
                    <h3 class="box-title">
                        <a href="service.html">One Platform</a>
                    </h3>

                    <p>
                        So I said twit is cheers gosh and brilliant burke gormless, crikey cheeky wind up morish cup of tea blower.!
                    </p>
                </div>
            </div>
            <!-- /.icon-box style-five -->
        </div>
        <!-- /.col-lg-4 col-md-6 col-sm-6 -->

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="icon-box style-five cl-five color-five wow fadeInRight" data-wow-delay="0.7s">
                <div class="icon-container">
                    <i class="icon-settings icons"></i>
                </div>

                <div class="box-content">
                    <h3 class="box-title">
                        <a href="service.html">Highly Customizable</a>
                    </h3>

                    <p>
                        So I said twit is cheers gosh and brilliant burke gormless, crikey cheeky wind up morish cup of tea blower.!
                    </p>
                </div>
            </div>
            <!-- /.icon-box style-five -->
        </div>
        <!-- /.col-lg-4 col-md-6 col-sm-6 -->

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="icon-box style-five cl-five color-six wow fadeInRight" data-wow-delay="0.8s">
                <div class="icon-container">
                    <i class="icon-layers icons"></i>
                </div>

                <div class="box-content">
                    <h3 class="box-title">
                        <a href="service.html">Well Documented</a>
                    </h3>

                    <p>
                        So I said twit is cheers gosh and brilliant burke gormless, crikey cheeky wind up morish cup of tea blower.!
                    </p>
                </div>
            </div>
            <!-- /.icon-box style-five -->
        </div>
        <!-- /.col-lg-4 col-md-6 col-sm-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /#feature -->

<!--==============================-->
<!--=         Testimonial        =-->
<!--==============================-->
<section id="testimonial-saas">
<div class="testimonial-shape-bg" data-bg-image="media/background/testimonial.svg"></div>

<div class="container">
    <div class="section-heading style-three">
        <h3 class="subtitle wow fadeInUp">Clients Feedback</h3>
        <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
            People love Saas. <br> See some of the stories.
        </h2>
    </div>


    <div class="testimonial-saas-wrapper">

        <div class="swiper-container wow fadeInUp testimonia-single" data-wow-delay="0.4s" id="testimonials" data-autoplay="5000" data-breakpoints='{"768": {"slidesPerView": 2, "spaceBetween": 30}, "667": {"slidesPerView": 1, "spaceBetween": 20}}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial style-two">
                        <div class="testi-wrapper">
                            <div class="user-details">
                                <div class="avatar">
                                    <img src="media/testimonial/01.png" alt="testi thumb">
                                </div>

                                <div class="info-content">
                                    <h4 class="name">Chauffina Carr</h4>
                                    <span class="designation">
                                        UI/UX Design
                                    </span>

                                    <ul class="ratings">
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                    </ul>
                                </div>
                                <!-- /.content -->

                            </div>

                            <div class="content">
                                <p>
                                    Tomfoolery blimey Queen's English wind up smashing so I said hunky-dory Oxford starkers say daft, James Bond Jeffrey well bleeder lemon squeezy at public school the full monty bugger blag, zonked tinkety tonk old fruit hanky panky young delinquent.
                                </p>

                                <span class="date">March 24, 2020</span>
                            </div>
                        </div>
                        <!-- /.testi-wrapper -->

                        <div class="wattermarker">
                            <img src="media/testimonial/quote.png" alt="astriol quote">
                        </div>
                    </div>
                    <!-- /.testimonial -->
                </div>
                <!-- /.swiper-slide -->

                <div class="swiper-slide">
                    <div class="testimonial style-two">
                        <div class="testi-wrapper">
                            <div class="user-details">
                                <div class="avatar">
                                    <img src="media/testimonial/02.png" alt="testi thumb">
                                </div>

                                <div class="info-content">
                                    <h4 class="name">Jackson Pot</h4>
                                    <span class="designation">
                                        Web Developer
                                    </span>
                                    <ul class="ratings">
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                    </ul>
                                </div>
                                <!-- /.content -->

                            </div>

                            <div class="content">
                                <p>
                                    Tomfoolery blimey Queen's English wind up smashing so I said hunky-dory Oxford starkers say daft, James Bond Jeffrey well bleeder lemon squeezy at public school the full monty bugger blag, zonked tinkety tonk old fruit hanky panky young delinquent.
                                </p>

                                <span class="date">March 24, 2020</span>
                            </div>
                        </div>
                        <!-- /.testi-wrapper -->

                        <div class="wattermarker">
                            <img src="media/testimonial/quote.png" alt="astriol quote">
                        </div>
                    </div>
                    <!-- /.testimonial -->
                </div>
                <!-- /.swiper-slide -->

                <div class="swiper-slide">
                    <div class="testimonial style-two">
                        <div class="testi-wrapper">
                            <div class="user-details">
                                <div class="avatar">
                                    <img src="media/testimonial/01.jpg" alt="testi thumb">
                                </div>

                                <div class="info-content">
                                    <h4 class="name">Hanson Deck</h4>
                                    <span class="designation">
                                        UI/UX Design
                                    </span>
                                    <ul class="ratings">
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                        <li><i class="ei ei-star"></i></li>
                                    </ul>
                                </div>
                                <!-- /.content -->

                            </div>

                            <div class="content">
                                <p>
                                    Tomfoolery blimey Queen's English wind up smashing so I said hunky-dory Oxford starkers say daft, James Bond Jeffrey well bleeder lemon squeezy at public school the full monty bugger blag, zonked tinkety tonk old fruit hanky panky young delinquent.
                                </p>

                                <span class="date">March 24, 2020</span>
                            </div>
                        </div>
                        <!-- /.testi-wrapper -->

                        <div class="wattermarker">
                            <img src="media/testimonial/quote.png" alt="astriol quote">
                        </div>
                    </div>
                    <!-- /.testimonial -->
                </div>
                <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- /.swiper-container -->

    </div>
    <!-- /.testimonial-wrapper -->

</div>
<!-- /.container -->
</section>
<!-- /#saas-testimonial -->

<!--===========================-->
<!--=         Download        =-->
<!--===========================-->
<section class="downloads">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="download-contents">
                <div class="section-heading text-left">
                    <h2 class="section-title wow fadeInUp">
                        Available for your<br> smartphone
                    </h2>

                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                        You can also use the functions of the app through any<br> web browser with the ''H" online portal
                    </p>

                    <div class="button-container">
                        <a href="#" class="app-btn gp-btn color-three wow fadeInUp" data-wow-delay="0.4s">
                            <div class=" button-text ">
                                <i class="fi flaticon-playstore"></i>
                                <span class="button-text ">Google play</span>
                            </div>
                        </a>
                        <a href="#" class="app-btn gp-btn btn-outline color-three wow fadeInUp" data-wow-delay="0.4s">
                            <div class="button-text">
                                <i class="fi flaticon-apple-logo"></i>
                                <span class="">App Store</span>
                            </div>

                        </a>

                        <div class="extra-link-box wow fadeInUp" data-wow-delay="0.5s">
                            <div class=" link-icon">
                                <i class="ei ei-icon_lightbulb_alt"></i>
                            </div>
                            <div class="link-content">
                                <p class="title">Interested in the app?</p>
                                <a href="#">Learn More <i class="ei ei-arrow_right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.download-contents -->
        </div>
        <!-- /.col-lg-6 -->

        <div class="col-lg-6">
            <div class="download-feature-image-wrapper">
                <div class="image-container">
                    <div class="image-one">
                        <img src="media/download/1.png" class="wow fadeInRight" data-wow-delay="0.7s" alt="astriol download">
                    </div>

                    <div class="image-two" data-parallax='{"x": 50}'>
                        <img src="media/download/2.png" class="wow fadeInLeft" data-wow-delay="0.7s" alt="astriol download">
                    </div>

                    <img src="media/download/dot.png" alt="astriol download" class="dot wow fadeInRight" data-wow-delay="0.3s">

                    <span class="circle wow zoom2"></span>
                </div>
            </div>
            <!-- /.download-feature-image-wrapper -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /.downloads -->

<!--========================-->
<!--=         Faq's        =-->
<!--========================-->
<section class="faqs">
<div class="container">
    <div class="section-heading style-three">
        <h3 class="subtitle wow fadeInUp">Faq's</h3>
        <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">
            Frequently asked questions
        </h2>
    </div>
    <div class="faq-wrapper pr">
        <span class="bg-circle-shape wow fadeIn"></span>
        <div class="row">
            <div class="col-md-6">
                <div id="accordionsing" class="faq wow fadeInRight" data-wow-delay="0.5s">
                    <div class="card">
                        <div class="card-header" id="heading10">
                            <h5>
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse00" aria-expanded="false" aria-controls="collapse00">What is Cohousing?</button>
                            </h5>
                        </div>
                        <div id="collapse00" class="collapse" aria-labelledby="heading10" data-parent="#accordionsing">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card active">
                        <div class="card-header" id="heading20">
                            <h5>
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">Can we change the design?</button>
                            </h5>
                        </div>
                        <div id="collapse10" class="collapse show" aria-labelledby="heading20" data-parent="#accordionsing">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading30">
                            <h5>
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20"> Ho to invite people with refferel link?</button>
                            </h5>
                        </div>
                        <div id="collapse20" class="collapse" aria-labelledby="heading30" data-parent="#accordionsing">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading40">
                            <h5>
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30"> Install theme demo contents </button>
                            </h5>
                        </div>
                        <div id="collapse30" class="collapse" aria-labelledby="heading40" data-parent="#accordionsing">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.col-md-6 -->

            <div class="col-md-6">
                <div id="accordionsing-2" class="faq wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="card active">
                        <div class="card-header" id="heading101">
                            <h5>
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse001" aria-expanded="false" aria-controls="collapse001">How to contact with Customer Service?</button>
                            </h5>
                        </div>
                        <div id="collapse001" class="collapse" aria-labelledby="heading101" data-parent="#accordionsing-2">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading201">
                            <h5>
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse101" aria-expanded="true" aria-controls="collapse101">How delete my account? </button>
                            </h5>
                        </div>
                        <div id="collapse101" class="collapse" aria-labelledby="heading201" data-parent="#accordionsing-2">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading301">
                            <h5>
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse201" aria-expanded="false" aria-controls="collapse201">Where is the edit optioon on dashboard? </button>
                            </h5>
                        </div>
                        <div id="collapse201" class="collapse" aria-labelledby="heading301" data-parent="#accordionsing-2">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading411">
                            <h5>
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse311" aria-expanded="false" aria-controls="collapse311">Is there any custome pricing system?</button>
                            </h5>
                        </div>
                        <div id="collapse311" class="collapse" aria-labelledby="heading411" data-parent="#accordionsing-2">
                            <div class="card-body">
                                <p>
                                    The little rotter gormless haggle up the duff the wireless the BBC tosser golly gosh, bubble and squeak bugger all mate arse gutted mate crikey bobby.!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.faq-wrapper -->
</div>
<!-- /.container -->
</section>
<!-- /.faqs -->

<!--==================================-->
<!--=         Call To Action         =-->
<!--==================================-->
<section id="call-to-action-three">
<div class="container pr">
    <div class="action-vector">
        <img src="media/footer/action.png" class="wow fadeInLeft" alt="action">
    </div>
    <div class="call-to-action-content">
        <div class="action-content-three wow gptFadeUp">
            <h2>In less than 2 years my business had done<br> $2,000,000 on Astriol</h2>
        </div>
        <!-- /.action-content -->

        <div class="action-button">
            <a href="contact.html" class="gp-btn color-three wow flipInX" data-wow-delay="0.3s">Get Started</a>
            <a href="contact.html" class="gp-btn color-three btn-outline wow flipInX" data-wow-delay="0.3s">Documentation</a>
        </div>
        <!-- /.action-button -->
    </div>
    <!-- /.col-to-action -->
</div>
<!-- /.container -->
</section>
<!-- /#call-to-action -->










@include('layouts.sections.footer.footer')

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script src="dependencies/jquery/jquery.min.js"></script>
<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="dependencies/swiper/js/swiper.min.js"></script>
<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="dependencies/jquery.appear/jquery.appear.js"></script>
<script src="dependencies/wow/js/wow.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="dependencies/countUp.js/countUp.min.js"></script>
<script src="dependencies/bodymovin/lottie.min.js"></script>
<script src="dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
<script src="dependencies/wavify/wavify.js"></script>
<script src="dependencies/jquery.marquee/js/jquery.marquee.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="dependencies/gmap3/js/gmap3.min.js"></script>
<script src="dependencies/slick-carousel/js/slick.min.js"></script>
<script src="assets/js/jquery.parallax.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M'></script>


</body>

</html>



@include('frontend.layout.sections.footer.footer')

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

<script src="dependencies/jquery/jquery.min.js"></script>
<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="dependencies/swiper/js/swiper.min.js"></script>
<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="dependencies/jquery.appear/jquery.appear.js"></script>
<script src="dependencies/wow/js/wow.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="dependencies/countUp.js/countUp.min.js"></script>
<script src="dependencies/bodymovin/lottie.min.js"></script>
<script src="dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
<script src="dependencies/wavify/wavify.js"></script>
<script src="dependencies/jquery.marquee/js/jquery.marquee.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="dependencies/gmap3/js/gmap3.min.js"></script>
<script src="dependencies/slick-carousel/js/slick.min.js"></script>
<script src="assets/js/jquery.parallax.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M'></script>


</body>

</html>