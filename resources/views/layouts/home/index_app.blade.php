
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


    <section class="banner banner-saas">
			<!-- <div class="banner-background">
        <img src="media/banner/saas/down_bg.png" alt="banner-bg">
        <img src="media/banner/saas/shape.png" class="transperent-shape" alt="shape">
    </div> -->

			<div class="overlay-shape" data-bg-image="media/banner/saas/down_bg.png">
				<img src="media/banner/saas/shape.png" class="transperent-shape" alt="shape">
			</div>

			<div class="banner-content-wrap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="banner-content-inner">
								<div class="banner-content">
									<h4 class="banner-sub-title wow gptFadeUp">Modern and Creative Design</h4>
									<h1 class="banner-title wow gptFadeUp" data-wow-delay="0.3s">
										Best app landing <br> pages in one place.<br> with <span>Astriol.</span>
									</h1>
									<a href="contact.html" class="gp-btn banner-btn color-seven wow gptFadeUp" data-wow-delay="0.4s">Request a Demo</a>
								</div>
								<!-- /.banner-content -->
							</div>
							<!-- /.banner-content-inner -->
						</div>
						<!-- /.col-lg-6 -->

						<div class="col-lg-6">

							<div class="animated-promo-mockup">
								<img src="media/banner/saas/man1.png" class="wow fadeInLeft man1" alt="mpckup">
								<img src="media/banner/saas/mob.png" class="wow fadeInLeft mob" alt="mpckup">
								<img src="media/banner/saas/man2.png" class="wow fadeInUp man2" alt="mpckup">
								<img src="media/banner/saas/tree.png" class="wow fadeInRight tree" alt="mpckup">
								<img src="media/banner/saas/cloud_01.png" class="cloud-one" alt="mpckup">
								<img src="media/banner/saas/cloud_02.png" class="cloud-three" alt="mpckup">
								<img src="media/banner/saas/cloud_03.png" class="cloud-two" alt="mpckup">
								<img src="media/banner/saas/line.png" class="line" alt="mpckup">
							</div>
							<!-- /.promo-mockup -->
						</div>
						<!-- /.col-lg-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.banner-content-wrap -->

		</section>
		<!-- /.banner banner-two -->

		<!--===============================-->
		<!--=         Performance         =-->
		<!--===============================-->
		<section class="performance">
			<div class="container pr">
				<div class="gp-tabs">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="tab-content-inner">
								<svg class="animate-shape-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="258px" height="205px">
									<path fill-rule="evenodd" opacity="0.102" fill="rgb(255, 152, 62)" d="M127.562,32.995 C198.653,32.995 258.000,-39.091 258.000,32.134 C258.000,103.360 200.369,204.088 129.278,204.088 C58.187,204.088 0.557,103.360 0.557,32.134 C0.557,-39.091 56.471,32.995 127.562,32.995 Z" />
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="animate-shape-one" xmlns:xlink="http://www.w3.org/1999/xlink" width="430px" height="502px">
									<path fill-rule="evenodd" fill="rgb(255, 152, 62)" d="M209.387,181.142 C213.798,316.899 429.072,90.804 429.072,209.514 C429.072,328.223 317.513,645.971 214.536,424.455 C164.511,316.846 -0.000,328.223 -0.000,209.514 C-0.000,90.804 197.645,-180.248 209.387,181.142 Z" />
								</svg>

								<ul class="gp-tabs-content wow fadeIn">
									<li data-content="inbox" class="active-tab">
										<div class="performance-tab-image">
											<img src="media/performance/1.png" alt="performance">
										</div>
									</li>

									<li data-content="new">
										<div class="performance-tab-image">
											<img src="media/performance/2.png" alt="performance">
										</div>
									</li>

									<li data-content="gallery">
										<div class="performance-tab-image">
											<img src="media/performance/3.png" alt="performance">
										</div>
									</li>

								</ul> <!-- gp-tabs-content -->
							</div><!-- /.tab-content-inner -->
						</div><!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="gp-tab-contentens">
								<div class="section-heading text-left">
									<h2 class="section-title wow fadeInUp">
										A simple, proven way to boost your team performance.
									</h2>

									<p class="wow fadeInUp" data-wow-delay="0.3s">
										So I said gosh pear shaped cockup no biggie bog standar Harry
										he nicked it barmy on your bike.!
									</p>
								</div>
							</div>

							<nav>
								<ul class="gp-tabs-navigation wow fadeInUp" data-wow-delay="0.5s">
									<li data-content="inbox" class="active-tab">
										<div class="tab-icon">
											<img src="media/performance/ti1.png" alt="tab icon">
										</div>
										<a href="#0">Beautiful Choices</a>
									</li>
									<li data-content="new">
										<div class="tab-icon">
											<img src="media/performance/ti2.png" alt="tab icon">
										</div>
										<a href="#0">Secured Payment</a>
									</li>
									<li data-content="gallery">
										<div class="tab-icon">
											<img src="media/performance/ti3.png" alt="tab icon">
										</div>
										<a href="#0">Mobile Apps</a>
									</li>
								</ul> <!-- gp-tabs-navigation -->
							</nav>
						</div><!-- /.col-lg-6 -->

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="750px" height="726px" class="tab-bg-shape">
							<path fill-rule="evenodd" fill="rgb(250, 249, 253)" d="M464.695,12.953 C614.502,45.457 750.000,129.472 750.000,378.000 C750.000,626.528 522.596,590.967 298.774,698.997 C51.835,818.183 -112.102,512.988 93.000,275.000 C255.297,86.680 214.419,-41.349 464.695,12.953 Z" />
						</svg>
					</div><!-- /.row -->
				</div> <!-- gp-tabs -->
			</div><!-- /.container -->
		</section><!-- /.performance -->










		<!--===========================-->
		<!--=         Feature         =-->
		<!--===========================-->
		<section id="feature">
			<div class="container">
				<div class="section-heading">
					<h2 class="section-title wow fadeInUp">
						A simple, proven way to boost<br> your team performance.
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.3s">
							<div class="icon-container">
								<img src="media/feature/10.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Highly Customizable</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.5s">
							<div class="icon-container">
								<img src="media/feature/11.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Live call support</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.7s">
							<div class="icon-container">
								<img src="media/feature/12.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Installation Guide</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="0.9s">
							<div class="icon-container">
								<img src="media/feature/13.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">One Platform</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="1.1s">
							<div class="icon-container">
								<img src="media/feature/14.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Easy setup process</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="icon-box style-four color-seven wow fadeInUp" data-wow-delay="1.3s">
							<div class="icon-container">
								<img src="media/feature/15.png" alt="service">
							</div>

							<div class="box-content">
								<h3 class="box-title">
									<a href="service-two.html">Well Documented</a>
								</h3>

								<p>
									Naff bender morish chiney pot bog<br> cor blimey guvnor golly gosh it your<br> round bleeder easy.
								</p>
							</div>
						</div>
						<!-- /.icon-box style-four color-seven -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#feature -->

		<!--===============================-->
		<!--=         Testimonial         =-->
		<!--===============================-->
		<section class="testimonials-apps">
			<div class="container">
				<div class="testimonial-top-wrapper">
					<svg class="testimonial-bg-quote" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="0 0 416 274" width="416" height="274">
						<path fill-rule="evenodd" fill="rgb(50, 51, 117)" d="M402.988,26.064 C340.422,26.064 286.385,63.267 261.550,116.762 C274.358,108.906 289.398,104.376 305.476,104.376 C352.073,104.376 390.037,142.415 390.037,189.184 C390.037,235.954 352.073,273.994 305.476,273.994 C258.879,273.994 220.978,235.954 220.978,189.184 C220.978,187.520 221.039,185.871 221.133,184.228 C221.073,183.715 220.978,183.212 220.978,182.685 C220.978,81.946 302.619,0.012 402.988,0.012 C410.224,0.012 416.002,5.803 416.002,12.995 C416.002,20.275 410.224,26.064 402.988,26.064 ZM181.999,26.064 C119.413,26.064 65.329,63.291 40.487,116.812 C53.311,108.927 68.377,104.376 84.486,104.376 C131.083,104.376 168.984,142.415 168.984,189.184 C168.984,235.954 131.083,273.994 84.486,273.994 C37.897,273.994 -0.002,235.954 -0.002,189.184 C-0.002,187.523 0.059,185.877 0.153,184.239 C0.091,183.724 -0.002,183.216 -0.002,182.685 C-0.002,81.946 81.631,0.012 181.999,0.012 C189.173,0.012 195.021,5.803 195.021,12.995 C195.021,20.275 189.173,26.064 181.999,26.064 Z" />
					</svg>

					<div class="testimonial-top">
						<div class="slide-item">
							<div class="testimonial-app">
								<div class="testi-content">
									<p>
										Why I say old chap that is spiffing do one I don't want no agro so I said lost the plot, Eaton such a fibber loo hunky-dory zonked show off show off pick your nose and blow off plastered fantastic excuse.
									</p>
								</div>
							</div>
							<!-- /.testimonial -->
						</div>

						<div class="slide-item">
							<div class="testimonial-app">
								<div class="testi-content">
									<p>
										Eaton such a fibber loo hunky-dory zonked show off show off pick your nose and blow off plastered fantastic excuse. Why I say old chap that is spiffing do one I don't want no agro so I said lost the plot.
									</p>
								</div>
							</div>
							<!-- /.testimonial -->
						</div>

						<div class="slide-item">
							<div class="testimonial-app">
								<div class="testi-content">
									<p>
										Why I say old chap that is spiffing do one I don't want no agro so I said lost the plot, Eaton such a fibber loo hunky-dory zonked show off show off pick your nose and blow off plastered fantastic excuse.
									</p>
								</div>
							</div>
							<!-- /.testimonial -->
						</div>

						<div class="slide-item">
							<div class="testimonial-app">
								<div class="testi-content">
									<p>
										Plastered fantastic excuse eaton such a fibber loo hunky-dory zonked show off show off pick your nose and blow off. Why I say old chap that is spiffing do one I don't want no agro so I said lost the plot.
									</p>
								</div>
							</div>
							<!-- /.testimonial -->
						</div>

						<div class="slide-item">
							<div class="testimonial-app">
								<div class="testi-content">
									<p>
										Spiffing do one why I say old chap that is I don't want no agro so I said lost the plot, Eaton such a fibber loo hunky-dory zonked show off show off pick your nose and blow off plastered fantastic excuse.
									</p>
								</div>
							</div>
							<!-- /.testimonial -->
						</div>
					</div>
				</div>
				<!-- /.testimonial-top-wrapper -->

				<div class="testimonial-bottom">
					<div class="slide-item">
						<div class="user-avatar">
							<img src="media/testimonial/4.jpg" alt="astriol user-avatar">
						</div>
						<!-- /.user-avatar -->

						<div class="info">
							<h4 class="user-name">Mominul Islam</h4>
							<span class="designation">Full-Stack Web Developer</span>
						</div>
						<!-- /.testi-content -->
					</div>
					<!-- /.slide-item -->

					<div class="slide-item">
						<div class="user-avatar">
							<img src="media/testimonial/3.jpg" alt="astriol user-avatar">
						</div>
						<!-- /.user-avatar -->

						<div class="info">
							<h4 class="user-name">Hanson Deck</h4>
							<span class="designation">UI/UX designer</span>
						</div>
						<!-- /.testi-content -->
					</div>
					<!-- /.slide-item -->

					<div class="slide-item">
						<div class="user-avatar">
							<img src="media/testimonial/4.jpg" alt="astriol user-avatar">
						</div>
						<!-- /.user-avatar -->

						<div class="info">
							<h4 class="user-name">Lurch Schpellchek</h4>
							<span class="designation">App Developer</span>
						</div>
						<!-- /.testi-content -->
					</div>
					<!-- /.slide-item -->

					<div class="slide-item">
						<div class="user-avatar">
							<img src="media/testimonial/01.jpg" alt="astriol user-avatar">
						</div>
						<!-- /.user-avatar -->

						<div class="info">
							<h4 class="user-name">Mominul Islam</h4>
							<span class="designation">Full-Stack Web Developer</span>
						</div>
						<!-- /.testi-content -->
					</div>
					<!-- /.slide-item -->

					<div class="slide-item">
						<div class="user-avatar">
							<img src="media/testimonial/4.jpg" alt="astriol user-avatar">
						</div>
						<!-- /.user-avatar -->

						<div class="info">
							<h4 class="user-name">Mominul Islam</h4>
							<span class="designation">Full-Stack Web Developer</span>
						</div>
						<!-- /.testi-content -->
					</div>
					<!-- /.slide-item -->
				</div>
				<!-- /.testimonial-bottom -->


			</div>
			<!-- /.container -->
		</section>
		<!-- /.testimonials -->

		<!--============================-->
		<!--=         Showcase         =-->
		<!--============================-->
		<section id="showcase">
			<div class="container">
				<div class="showcase-content">
					<div class="row">
						<div class="col-lg-6 gpt-order-2">
							<div class="showcase-content style-one mt-5">
								<div class="section-heading text-left">
									<h2 class="section-title wow fadeInUp">
										Deploy your site with<br>
										simple commands
									</h2>
								</div>

								<div class="sub-content wow fadeInUp" data-wow-delay="0.3s">
									<h3 class="sub-title">
										Benzersiz Stok ve Sube Yonetimi
									</h3>

									<p>
										Oxford my lady the bee's knees. Tinkety tonk old fruit daft<br> Richard baking
										cakes.
									</p>
								</div>

								<div class="sub-content wow fadeInUp" data-wow-delay="0.5s">
									<h3 class="sub-title">
										Internet Olmadan Calisabilme
									</h3>

									<p>
										Tinkety tonk old fruit daft Richard baking cakes the bee's<br> knees I brown bread
										crikey.
									</p>
								</div>
							</div>
							<!-- /.showcase-content -->
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-6">
							<div class="showcase-image-box style-one wow fadeInUp" data-wow-delay="0.3s">
								<img src="media/showcase/iPad.png" alt="iphone">
								<div class="animate-shape">
									<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="0 0 350 570" width="350" height="570">
										<path id="showcase-svg" fill-rule="evenodd" fill="rgb(252, 126, 87)" d="M175.000,-0.001 C271.650,-0.001 350.000,78.349 350.000,174.999 C350.000,271.649 345.650,569.999 249.000,569.999 C152.350,569.999 -0.000,271.649 -0.000,174.999 C-0.000,78.349 78.350,-0.001 175.000,-0.001 Z" />
									</svg>
								</div>
							</div>
							<!-- /.showcase-image-box -->
						</div>
						<!-- /.col-lg-8 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.showcase-content -->

				<div class="showcase-content style-two">
					<div class="row">
						<div class="col-lg-5">
							<div class="showcase-image-box wow fadeInUp">
								<img src="media/showcase/iphone.png" alt="iphone">
								<div class="animate-shape">

									<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="0 0 401 514" width="401" height="514">
										<path fill-rule="evenodd" fill="rgb(0, 192, 205)" d="M149.066,74.184 C195.488,181.016 365.373,85.326 395.934,197.727 C432.728,333.057 210.795,688.037 140.167,408.637 C81.834,177.879 38.111,309.301 4.655,197.727 C-21.312,111.127 66.106,-116.734 149.066,74.184 Z" />
									</svg>
								</div>
							</div>
							<!-- /.showcase-image-box -->
						</div>
						<!-- /.col-lg-5 -->

						<div class="col-lg-7">
							<div class="showcase-content">
								<div class="section-heading text-left">
									<h2 class="section-title wow fadeInUp">
										Showcase the great<br>
										features of your app
									</h2>
								</div>

								<div class="sub-content wow fadeInUp" data-wow-delay="0.3s">
									<h3 class="sub-title">
										Her yerden erisim
									</h3>

									<p>
										Oxford my lady the bee's knees. Tinkety tonk old fruit daft<br>
										Richard baking cakes the bee's.
									</p>
								</div>

								<div class="sub-content wow fadeInUp" data-wow-delay="0.5s">
									<h3 class="sub-title">
										Dilediginiz Kadar Sube
									</h3>

									<p>
										Tinkety tonk old fruit daft Richard baking cakes the bee's<br>
										knees I brown bread crikey.!
									</p>
								</div>
							</div>
							<!-- /.showcase-content -->
						</div>
						<!-- /.col-lg-7 -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.showcase-content -->

				<div class="showcase-content style-three">
					<div class="row">
						<div class="col-lg-5 gpt-order-2">
							<div class="showcase-content">
								<div class="section-heading text-left">
									<h2 class="section-title wow fadeInUp">
										Yatirim maliyeti ve gizli<br> masraflar yok
									</h2>
								</div>

								<div class="sub-content wow fadeInUp" data-wow-delay="0.3s">
									<h3 class="sub-title">
										Benzersiz Stok ve Sube Yonetimi
									</h3>

									<p>
										Oxford my lady the bee's knees. Tinkety tonk old fruit daft<br> Richard baking cakes.
									</p>
								</div>

								<div class="sub-content wow fadeInUp" data-wow-delay="0.5s">
									<h3 class="sub-title">
										Internet Olmadan Calisabilme
									</h3>

									<p>
										Tinkety tonk old fruit daft Richard baking cakes the bee's<br> knees I brown bread
										crikey.!
									</p>
								</div>
							</div>
							<!-- /.showcase-content -->
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-7">
							<div class="showcase-image-box style-three text-right wow fadeInUp">
								<img src="media/showcase/iPad2.png" alt="iphone">
								<div class="animate-shape">
									<svg preserveAspectRatio="xMidYMid meet" x="0" y="0" viewBox="0 0 405 525" width="405" height="525">
										<path fill-rule="evenodd" fill="rgb(110, 88, 252)" d="M212.987,0.999 C498.124,-14.567 356.102,179.116 304.863,300.906 C257.624,413.191 526.147,463.359 335.783,514.370 C92.922,579.448 3.310,321.876 0.083,197.703 C-3.082,75.954 105.163,6.886 212.987,0.999 Z" />
									</svg>
								</div>
							</div>
							<!-- /.showcase-image-box -->
						</div>
						<!-- /.col-lg-8 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.showcase-content -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#showcase -->

		<!--===========================-->
		<!--=         Platform        =-->
		<!--===========================-->
		<section id="platform">
			<div class="container">
				<div class="section-heading">
					<h2 class="section-title wow fadeInUp">
						The Point of Sale Platform<br> Powering the Most Successful Restaurants
					</h2>
				</div>
				<!-- /.section-heading -->

				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.3s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Easy-to-use software that can scale with your business
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.3s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Cloud-based reports accessible in real-time
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.3s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Hardwired terminals and offline mode so nothing slows you down
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Tickety boo what a plonker blower tinkety tonk old fruit
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Simple, flat rate payment processing for all transactions
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->

					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="icon-list-box wow fadeInUp" data-wow-delay="0.5s">
							<div class="list-icon">
								<i class="ei ei-icon_check"></i>
							</div>

							<div class="content">
								<p>
									Tableside ordering and payments, with digital receipts, to grow your customer list
								</p>
							</div>
						</div>
						<!-- /.icon-list-box -->
					</div>
					<!-- /.col-lg-4  col-md-4 -->
				</div>
				<!-- /.row -->

				<div class="platform-mockup text-center">
					<img src="media/feature/16.png" class="wow fadeInDown" data-wow-delay="0.7s" alt="mockup">
				</div>
				<!-- /.platform-mockup -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#platform -->

		<!--=============================-->
		<!--=         Blog Post         =-->
		<!--=============================-->
		<section id="blog-grid-two">
			<div class="container">

				<div class="section-heading">
					<h2 class="section-title">
						Check out some of our amazing <br> resources or join us in a city near you.
					</h2>
				</div>
				<!-- /.section-title -->

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<article class="blog-post-two">
							<div class="feature-image">
								<a href="blog-single.html">
									<img src="media/blog/4.jpg" alt="blog-thumb">
								</a>
							</div>
							<!-- /.feature-image -->
							<div class="blog-content">
								<ul class="post-meta">
									<li><a href="blog-single.html">June 11, 2021</a></li>
									<li><a href="blog-single.html">Pos</a>, <a href="blog-single.html">Software</a></li>
								</ul>

								<h3 class="entry-title">
									<a href="blog-single.html">How To Deploy a PHP Application with Kubernetes.</a>
								</h3>

								<ul class="post-meta">
									<li>BY <a href="blog-single.html">Admin</a></li>
								</ul>
							</div>
							<!-- /.blog-content -->
						</article>
						<!-- /.blog-post-two -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<article class="blog-post-two">
							<div class="feature-image">
								<a href="blog-single.html">
									<img src="media/blog/5.jpg" alt="blog-thumb">
								</a>
							</div>
							<!-- /.feature-image -->
							<div class="blog-content">
								<ul class="post-meta">
									<li><a href="blog-single.html">Feb 20, 2021</a></li>
									<li><a href="blog-single.html">Pos</a>, <a href="blog-single.html">Software</a></li>
								</ul>

								<h3 class="entry-title">
									<a href="blog-single.html">How To Build a Node.js Application with Docker</a>
								</h3>

								<ul class="post-meta">
									<li>BY <a href="blog-single.html">Admin</a></li>
								</ul>
							</div>
							<!-- /.blog-content -->
						</article>
						<!-- /.blog-post-two -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->

					<div class="col-lg-4 col-md-6 col-sm-6">
						<article class="blog-post-two">
							<div class="feature-image">
								<a href="blog-single.html">
									<img src="media/blog/6.jpg" alt="blog-thumb">
								</a>
							</div>
							<!-- /.feature-image -->
							<div class="blog-content">
								<ul class="post-meta">
									<li><a href="blog-single.html">DES 15, 2020</a></li>
									<li><a href="blog-single.html">Pos</a>, <a href="blog-single.html">Software</a></li>
								</ul>

								<h3 class="entry-title">
									<a href="blog-single.html">How To Build a Node.js Application with Docker</a>
								</h3>

								<ul class="post-meta">
									<li>BY <a href="blog-single.html">Admin</a></li>
								</ul>
							</div>
							<!-- /.blog-content -->
						</article>
						<!-- /.blog-post-two -->
					</div>
					<!-- /.col-lg-4 col-md-6 col-sm-6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#blog-grid -->

		<!--===================================-->
		<!--=         Call To Action        =-->
		<!--===================================-->
		<section id="call-to-action-four">
			<div class="container">
				<div class="call-to-action-four text-center">
					<div class="action-content wow gptFadeUp">
						<h2 class="action-title">You will love our solutions</h2>

						<p>Create your own e-commerce store with Ariya today.</p>

					</div>
					<!-- /.action-content -->

					<div class="action-button wow gptFadeUp" data-wow-delay="0.5s">
						<a href="login.html" class="gp-btn color-seven color-three">Get Started Free</a>
					</div>
					<!-- /.action-button -->
				</div>
				<!-- /.col-to-action -->
			</div>
			<!-- /.container -->

			<div class="left-shape">
				<img src="media/call-to-action/left-shape.png" class="wow fadeInLeft" alt="shape left">
			</div>

			<div class="bottom-shape">
				<img src="media/call-to-action/bottom-shape.png" class="wow fadeInRight" alt="shape bottom">
			</div>
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