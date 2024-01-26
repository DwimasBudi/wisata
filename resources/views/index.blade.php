	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary Meta Tags -->
    <title>Bumi Perkemahan Gendingan Surya Bakti</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <meta name="title" content="Bumi Perkemahan Gendingan Surya Bakti" />
    <meta name="description" content="Wisata Bumi Perkemahan Gendingan Surya Bakti Sidorejo Kendal" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ asset('/') }}" />
    <meta property="og:title" content="Bumi Perkemahan Gendingan Surya Bakti" />
    <meta property="og:description" content="Wisata Bumi Perkemahan Gendingan Surya Bakti Sidorejo Kendal" />
    <meta property="og:image" content="{{ asset('storage/images/kolam-anak.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ asset('storage/images/kolam-anak.jpg') }}" />
    <meta property="twitter:title" content="Bumi Perkemahan Gendingan Surya Bakti" />
    <meta property="twitter:description" content="Wisata Bumi Perkemahan Gendingan Surya Bakti Sidorejo Kendal" />
    <meta property="twitter:image" content="{{ asset('storage/images/kolam-anak.jpg') }}" />

		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			{{-- <link rel="stylesheet" href="css/animate.min.css"> --}}
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/dbs.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<!-- <link rel="stylesheet" href="css/style.css"> -->
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-light">
						<div class="container">
							  <a class="navbar-brand text-white" href="{{ asset('/') }}">
							  	<img src="storage/images/gendingan.png" alt="">
									{{-- Pesona Sidorejo --}}
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									<li><a href="{{ asset('/') }}">Home</a></li>
									<li><a href="#fasilitas">Fasilitas</a></li>									
									<li><a href="#gallery">Gallery</a></li>
									{{-- <li><a href="#gallery">Gallery</a></li> --}}
									{{-- <li><a href="#faq">Faq</a></li> --}}
									<li><a href="#contact">Contact</a></li>
									<!-- Dropdown -->
								    {{-- <li class="dropdown">
								      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								        Pages
								      </a>
								      <div class="dropdown-menu">
												<a class="dropdown-item" href="generic.html">Generic</a>
								        <a class="dropdown-item" href="elements.html">Elements</a>
								      </div>
								    </li> --}}
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->				
			</section>
			<section class="default-banner active-blog-slider">
				@foreach ($headline as $item)
						
				<div class="item-slider relative" style="background: url(storage/{{ $item->image }});background-size: cover;">
					<div class="overlay" style="background: rgba(0,0,0,.5)"></div>
						<div class="container">
							<div class="row fullscreen justify-content-center align-items-center">
								<div class="col-md-10 col-12">
									<div class="banner-content text-center">
										<h4 class="text-white mb-20 text-uppercase">Bumi perkemahan Gendingan</h4>
										<h1 class="text-uppercase text-white">{{ $item->title }}</h1>
										<div class="text-white" style="color: white;">{!! $item->body !!}</div>
											<br>
										<a href="https://www.google.com/maps/dir//Bumi+perkemahan+Gendingan+Unnamed+Road+Wonokerti,+Karanggupito+Kec.+Kendal,+Kabupaten+Ngawi,+Jawa+Timur+63262/@-7.5733422,111.2603008,15z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2e79f378243ffcbb:0x5df23940c4cba7e7" class="text-uppercase header-btn">Discover Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
				</section>
				<section class="portfolio" id="fasilitas">
					<h2>Fasilitas</h2>
					{{-- <p>Take a look at some of our memorable camping adventures.</p> --}}
					<ul class="cards">
						@foreach ($fasilitas as $fase)
						<li class="card">
							<img src="storage/{{ $fase->image }}" alt="img">
							<h3>{{ $fase->nama }}</h3>
							{!! $fase->body !!}
						</li>
						@endforeach
					</ul>
				</section>
				<section id="gallery" class="section bg-default text-center offset-top-50 p-5 bg-gray-36">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Gallery</h1>
								{{-- <p>Who are in extremely love with eco friendly system.</p> --}}
							</div>
						</div>
					</div>
					<div class="owl-slider">
						<div id="carousel" class="owl-carousel">
							@foreach ($galleries as $gallery)
							<div class="item">
								<img src="storage/{{ $gallery->image }}" alt="1000X1000" style="width:262.5px; height:262.5px; object-fit:cover;">
							</div>
							@endforeach
						</div>
					</div>
				</section>

			<section class="section-gap info-area" id="about">
				<div class="container">
					{{-- <div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Tentang Kami</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					 --}}
					<div class="single-info row mt-40">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="storage/{{ $about->image }}" class="img-fluid" alt="" style="filter: brightness(50%)">
                                <a href="{{ $about->video }}" class="play-btn" style="position: absolute; top:50%; right:40%;"><img src="img/play-btn.png" alt=""></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30">{{ $about->title }}</h2>
								{!! $about->body !!}
								</div>
						</div>
					</div>
				</div>
			</section>

		<section class="contact" id="contact" ">
			<h2>Contact Us</h2>
			{{-- <p>Reach out to us for any inquiries or feedback.</p> --}}
			<div class="row">
				<div class="col-lg-12 col-sm-6" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center;">
					<div class="information" style="width: 500px;">
						<div class="contact-details">
							<p><i class="fas fa-map-marker-alt"></i> {{ $kontak->alamat }}</p>
							<p><i class="fas fa-envelope"></i> {{ $kontak->email }}</p>
							<p><i class="fas fa-phone"></i> {{ $kontak->hp }}</p>
							<p><i class="fas fa-clock"></i> {{ $kontak->jam }}</p>
							{{-- <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 3:00 PM</p> --}}
							{{-- <p><i class="fas fa-clock"></i> Sunday: Closed</p> --}}
							<p><i class="fas fa-globe"></i> {{ asset('/') }}</p>
						</div>
					</div>
					<div class="form" style="width: 500px; overflow: hidden;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0150540024447!2d111.25772587380162!3d-7.573336874805329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79f378243ffcbb%3A0x5df23940c4cba7e7!2sBumi%20perkemahan%20Gendingan!5e0!3m2!1sid!2sid!4v1706013863746!5m2!1sid!2sid"width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					{{-- <iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25849.557346854865!2d111.25952039888199!3d-7.558045041618607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79f38ccf8fea75%3A0xa7ff225dc2000f5d!2sKantor%20Desa%20Sidorejo!5e0!3m2!1sid!2sid!4v1703396338442!5m2!1sid!2sid"
						width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
					</div>
				</div>
				
			</div>
		</section>

			<!-- Start logo Area -->
			<section class="logo-area">
				<div class="container">
					<div class="row">
						
					</div>
				</div>	
			</section>
			<!-- End logo Area -->
			<!-- start footer Area -->		
			{{-- <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            		<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	 --}}
			<!-- End footer Area -->			

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/slick.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>		
			<script src="js/main.js"></script>	
			<script>
				jQuery("#carousel").owlCarousel({
						autoplay: true,
						rewind: true, /* use rewind if you don't want loop */
						margin: 20,
						navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
						/*
					 animateOut: 'fadeOut',
					 animateIn: 'fadeIn',
					 */
						responsiveClass: true,
						autoHeight: true,
						dots: false,
						autoplayTimeout: 7000,
						smartSpeed: 800,
						nav: true,
						loop: true,
						responsive: {
							0: {
								items: 1
							},

							600: {
								items: 3
							},

							1024: {
								items: 4
							},

							1366: {
								items: 4
							}
						}
					});
			</script>
		</body>
	</html>