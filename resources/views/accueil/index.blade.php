<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SENFORAGE</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('assets/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link type="text/css"href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slicknav.min.cssV')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.html" class="site-logo">
					<img src="{{asset('assets/./img/logo.jpg')}}" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
					<a href="{{route('login')}}">Login</a> / <a href="{{route('register')}}">Register</a>
					
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="home.html">Acceuil</a></li>
						<li><a href="games.html">Presentation</a>
						{{-- 	<ul class="sub-menu">
								<li><a href="game-single.html">Game Singel</a></li>
							</ul> --}}
						</li>
						<li><a href="review.html">Services</a></li>
						{{-- <li><a href="blog.html">News</a></li> --}}
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('assets/img/slider-bg-1.jpg')}}">
				<div class="container"><br>
					<h2>BIENVENUE DANS SENFORAGE</h2>
					<p>Fort d’une expérience de presque 5 ans dans le forage, la société SENFORAGE possède toutes les qualités techniques, matérielles et humaines pour mener 
						à bien les chantiers qu’elle entreprend.<br><br>

						Avec plusieurs ateliers de forage, capables d’atteindre 1500m de profondeur et 1.5m de diamètre, des gabarits de machine adaptés à chaque problématique 
						d’accès, un parc de plus de 20 pompes,des équipements spécifiques pour la régénération d’ouvrages, nos équipes de professionnels interviennent dans tout
						le Sénégal sur les chantiers les plus complexes.<br><br>

						Chaque équipe de forage est spécialisée, habilitée et affectée à un domaine de compétences qui lui est propre : l’eau potable, thermale, minérale, 
						industrielle, particulier, agriculteur, fondation et géothermie.<br><br>
							
						SENFORAGE, c’est aussi une solution pour la pose d’une pompe à chaleur clef en main. Nous sommes en effet capables de vous fournir une solution géothermique
					    comprenant la réalisation des forages, l’installation de l’échangeur, de la pompe à chaleur et le branchement sur votre réseau.
					</p>
					{{-- <a href="#" class="site-btn">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a> --}}
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{asset('assets/img/promo-bg.jpg')}}">
				<div class="container">
					<h2>Bienvenue dans SENFORAGE</h2>
					<p>Fort d’une expérience de presque 5 ans dans le forage, la société SENFORAGE possède toutes les qualités techniques, matérielles et humaines pour mener 
							à bien les chantiers qu’elle entreprend.<br><br>
	
							Avec plusieurs ateliers de forage, capables d’atteindre 1500m de profondeur et 1.5m de diamètre, des gabarits de machine adaptés à chaque problématique 
							d’accès, un parc de plus de 20 pompes,des équipements spécifiques pour la régénération d’ouvrages, nos équipes de professionnels interviennent dans tout
							le Sénégal sur les chantiers les plus complexes.<br><br>
	
							Chaque équipe de forage est spécialisée, habilitée et affectée à un domaine de compétences qui lui est propre : l’eau potable, thermale, minérale, 
							industrielle, particulier, agriculteur, fondation et géothermie.<br><br>
								
							SENFORAGE, c’est aussi une solution pour la pose d’une pompe à chaleur clef en main. Nous sommes en effet capables de vous fournir une solution géothermique
							comprenant la réalisation des forages, l’installation de l’échangeur, de la pompe à chaleur et le branchement sur votre réseau.
						</p>
					{{-- <a href="#" class="site-btn">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a> --}}
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->


	<!-- Intro section -->
	{{-- <section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
						<h3>The best online game is out now!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Playstation</a></div>
						<h3>Top 5 best games in november</h3>
						<p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  labore suspendisse ultrices gravida....</p>
						<a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
						<h3>Get this game at a promo price</h3>
						<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
						<a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="#">Racing</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Strategy</a></li>
						<li><a href="#">Online</a></li>
					</ul>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{asset('assets/img/blog/1.jpg')}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{asset('assets/./img/blog/2.jpg')}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="{{asset('assets/./img/icons/double-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="{{asset('./img/blog/3.jpg')}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>The best online game is out now!</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{asset('assets/./img/blog-widget/1.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{asset('assets/./img/blog-widget/2.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{asset('assets/./img/blog-widget/3.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{asset('assets/./img/blog-widget/4.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
						<a href="#" class="add">
							<img src="{{asset('assets/./img/add.jpg')}}" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Blog section end -->


	<!-- Intro section -->
	{{-- <section class="intro-video-section set-bg d-flex align-items-end " data-setbg="{{asset('assets/img/promo-bg.jpg')}}">
		<a href="https://www.youtube.com/watch?v=uFsGy5x_fyQ" class="video-play-btn video-popup"><img src="{{asset('assets/img/icons/solid-right-arrow.png')}}" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>Promo video of the game</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			</div>
		</div>
	</section> --}}
	<!-- Intro section end -->


	<!-- Featured section -->
	{{-- <section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="{{asset('assets/img/featured-bg.jpg')}}"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
				<h3>The game you’ve been waiting  for is out now</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
				<a href="#" class="read-more">Read More  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></a>
			</div>
		</div>
	</section> --}}
	<!-- Featured section end-->



	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="{{asset('assets/img/icons/double-arrow.png')}}" alt="#"/></button>
			</form>
		</div>
	</section>
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="{{asset('assets/img/footer-left.jpg')}}" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="{{asset('assets/img/footer-right.jpg')}}" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="{{asset('assets/./img/logo.jpg')}}" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Acceuil</a></li>
				<li><a href="">Presentation</a></li>
				<li><a href="">Services</a></li>
				{{-- <li><a href="">News</a></li> --}}
				<li><a href="">Contact</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			{{-- <div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div> --}}
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky-sidebar.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>

	</body>
</html>
