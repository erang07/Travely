<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Including Start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- End of Meta Including -->

	<!-- Title Start -->
	<title>Beranda | Travelinary</title>
	<!-- End of Title -->

	<!-- CSS and JavaScript Including File -->
	<link rel="icon" type="image/png" href="assets/logo/travelinaryIcon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/lib/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/lib/owlcarousel/owl.theme.default.min.css">
	<script src="assets/js/fontawesome.js"></script>


	<!-- End of Including File -->

</head>

<body>

	<!-- Header Start -->
	<input type="checkbox" id="check"></input>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.php">
			<img src="assets/logo/travelinary.png" height="50" alt="Logo Travelinary">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav mx-auto">
			<li class="nav-item active">
				<a class="nav-link nunitoSemiBold" href="index.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="destinasi.php">
				  Destinasi
				</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="event.php">Event</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="#contact">Kontak</a>
			</li>
		  </ul>
		  <div class="nonAuth d-none">
			<a href="login.php
			" class="nunitoSemiBold mr-3">Masuk</a>
			<a href="register.php
			" class="btn btn-pill px-4">Daftar</a>
		  </div>
		<div class="auth avatar d-none">
			<div class="d-flex align-items-center">
				<div class="col-12 pl-0">
					<a
					class="nunitoRegular align-items-center d-flex dropdown-toggle"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="assets/icon/Photo Profile.svg" width="40" alt="">
					<h5 class="nunitoSemiBold ml-2 my-0">Apin</h5> <i class="fas ml-1 fa-angle-down"></i>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="profileWisata.php">
						<i class="fas mr-2 fa-user"></i>
						Profile</a>
					<a class="dropdown-item logout" href="javascript:void(0)">
						<i class="fas mr-2 fa-sign-out-alt"></i>
						Logout</a>
				</div>
				</div>
			</div>
		</div>
		</div>
	  </nav>

	<!-- End of Header -->

	<!-- Slideshow Start -->
	<div class="scroll" id="home"></div>
	<div class="banner container">
		<div class="row pt-4">
			<div class="col-12 col-lg-6 align-self-center">
				<p class="textOrange d-inline animation1">Indonesia itu indah</p>
				<h1 class="loraBold mt-4 animation2">Banyak Wisata Maupun Kuliner yang Membuat Hatimu Bewarna</h1>
				<p class="mt-3 desc animation3">Travelinary merekomendasikan beberapa tempat untuk kamu jelajahi, buruan jelajahi sekarang</p>
				<a href="destinasi.php" class="btn btn-pill-large px-4 mt-2 animation4">Jelajahi Sekarang</a>
			</div>
			<div class="col-12 col-lg-6 align-self-center mt-5 mt-lg-0">
				<div class="animationImg">
					<img src="assets/img/img-header2.png" width="100%" alt="">
				</div>
			</div>
		</div>
	</div>

	<!-- Content Start -->
	<!-- Total Post Section -->
	<div class="scroll" id="destination"></div>
	<section id="totalPost">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<img src="assets/icon/Smoky Plane.svg" class="iconLeft" alt="">
					<div class="col-md-2 col-12 column">
						<h1 class="nunitoBold">124+</h1>
						<h4 class="textOrange nunitoBold">Wisata</h4>
					</div>
					<div class="col-md-2 col-12 column">
						<h1 class="nunitoBold">150+</h1>
						<h4 class="textOrange nunitoBold">Kuliner</h4>
					</div>
					<div class="col-md-2 col-12 column">
						<h1 class="nunitoBold">231+</h1>
						<h4 class="textOrange nunitoBold">Event</h4>
					</div>
				<img src="assets/icon/Smoky Rocket.svg" class="iconRight"  alt="">
		
				</div>
		</div>
	</section>
	<!-- End Total Post Section -->

	<!-- Hint Section -->
	<section id="hint">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="animationImg2">	
						<img src="assets/img/img-laptop.png" width="100%">
					</div>
				</div>
				<div class="col-lg-6 col-12 align-self-center mt-5 mt-lg-0 desc">
					<h2 class="loraBold">Kamu Bisa Mencari atau Mempublish</h2>
						<div class="column">
							<img src="assets/icon/Checklist.svg" height="30"> <h4 class="mb-0 ml-2">Wisata</h4>
						</div>
						<div class="column">
							<img src="assets/icon/Checklist.svg" height="30"> <h4 class="mb-0 ml-2">Kuliner</h4>
						</div>
						<div class="column">
							<img src="assets/icon/Checklist.svg" height="30"> <h4 class="mb-0 ml-2">Event</h4>
						</div>
					<div class="row align-items-center mt-4 ml-1">
						<a href="javascript:void(0)" class="btn pb-2 btn-pill-stroke mr-4 nonAuth d-none nunitoBold px-4" data-toggle="modal" data-target="#publishLogin">
							Publish
						  </a>
						<a href="profileWisata.php" class="mr-4 pb-2 btn btn-pill-stroke auth d-none px-4 nunitoBold">Publish</a>
						<a href="#wisata" class="btn btn-pill px-4">Cari Sekarang</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hint Section -->

	<!-- Wisata Section -->
	<section id="wisata">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-12 mb-2">
					<h5 class="textOrange loraSemiBold">Wisata Favorit</h5>
					<h2 class="loraBold">10 Wisata Paling Banyak Diminati</h2>
				</div>
				<div class="owl-carousel owl-theme topPost">
					<a href="Destinasi/Wisata/raja-ampat.php">
						<div class="card">
					<div class="love">
					<img src="assets/img/wisata/raja-ampat.jpeg" alt="candi tikus">
						
					</div>
					<div class="desc px-3 py-2">
						<h4 class="mb-1 nunitoBold">Raja Ampat</h4>
					<p class="mb-1"><i class="fa fa-map-marker"></i>Papua Barat</p>
					<p class="price mb-1">Rp 10,000</p>
					<div class="d-flex align-self-center">
					<img src="assets/icon/Stars.svg" height="23" alt="">
					<p class="totalComments">(149)</p>
					</div>
					</div>
					
				</div>
				</a>
						<a href="Destinasi/Wisata/danau-toba.php">
							<div class="card">
						<div class="love">
						<img src="assets/img/wisata/danau-toba.jpeg" alt="candi tikus">
							
						</div>
						<div class="desc px-3 py-2">
							<h4 class="mb-1 nunitoBold">Danau Toba</h4>
						<p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Utara</p>
						<p class="price mb-1">Rp 10,000</p>
						<div class="d-flex align-self-center">
						<img src="assets/icon/Stars.svg" height="23" alt="">
						<p class="totalComments">(149)</p>
						</div>
						</div>
						
					</div>
					</a>
						<a href="">
							<div class="card">
						<div class="love">
						<img src="assets/img/wisata/raja-ampat.jpeg" alt="candi tikus">
							
						</div>
						<div class="desc px-3 py-2">
							<h4 class="mb-1 nunitoBold">Raja Ampat</h4>
						<p class="mb-1"><i class="fa fa-map-marker"></i>Papua Barat</p>
						<p class="price mb-1">Rp 10,000</p>
						<div class="d-flex align-self-center">
						<img src="assets/icon/Stars.svg" height="23" alt="">
						<p class="totalComments">(149)</p>
						</div>
						</div>
						
					</div>
					</a>
						<a href="">
							<div class="card">
						<div class="love">
						<img src="assets/img/wisata/candi-borobudur.jpeg" alt="candi tikus">
							
						</div>
						<div class="desc px-3 py-2">
							<h4 class="mb-1 nunitoBold">Candi Borobudur</h4>
						<p class="mb-1"><i class="fa fa-map-marker"></i>Jawa Tengah</p>
						<p class="price mb-1">Rp 10,000</p>
						<div class="d-flex align-self-center">
						<img src="assets/icon/Stars.svg" height="23" alt="">
						<p class="totalComments">(149)</p>
						</div>
						</div>
						
					</div>
					</a>
						<a href="">
							<div class="card">
						<div class="love">
						<img src="assets/img/wisata/candi-tikus.jpg" alt="candi tikus">
							
						</div>
						<div class="desc px-3 py-2">
							<h4 class="mb-1 nunitoBold">Candi Tikus</h4>
						<p class="mb-1"><i class="fa fa-map-marker"></i>Mojokerto, Jawa Timur</p>
						<p class="price mb-1">Rp 10,000</p>
						<div class="d-flex align-self-center">
						<img src="assets/icon/Stars.svg" height="23" alt="">
						<p class="totalComments">(149)</p>
						</div>
						</div>
						
					</div>
					</a>
				</div>
			</div>
				
		</div>
	</section>
	<!-- end Wisata Section -->

	<!-- Parralax Start -->
	<div class="news-slide" style="margin-top: 8rem;">
		<section class="module parallax parallax-1" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/parallax.jpg') no-repeat center center fixed;" data-type="background" data-speed="10">
			<br>
			<div class="parallax-container">
				<div class="row">
					<div class="col-1 col-sm-2 col-lg-1"></div>
					<div class="col-4 col-sm-3 col-md-4 col-lg-4">
						<h3 class="text-parralax-kiri">Travelinary juga tesedia di Play Store dan App Store</h3>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1">
						<h3 class="text-parralax-tengah">&nbsp;|</h3>
					</div>
					<div class="col-5 col-sm-6 col-md-5 col-lg-5">
						<h3 class="text-parralax-kiri">Download Sekarang</h3>
						<div class="row" style="margin-left: -22px">
							<div class="col-5 col-sm-4 col-md-5 col-lg-5">
								<img src="assets/img/google_play.png" class="img-google">
							</div>
							&nbsp;
							<div class="col-4 col-sm-6 col-md-3 col-lg-5">
								<img src="assets/img/app_store.png" class="img-apple">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Parralax -->

		<div class="scroll" id="event"></div>
	</div>

	<!-- Wisata Section -->
	<section id="wisata">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-12 mb-2">
					<h5 class="textOrange loraSemiBold">Kuliner Favorit</h5>
					<h2 class="loraBold">10 Kuliner Paling Banyak Diminati</h2>
				</div>
				<div class="owl-carousel owl-theme topPost">
						<a href="">
							<div class="card">
						<div class="love">
						<img src="assets/img/wisata/rendang.jpeg" alt="candi tikus">
							
						</div>
						<div class="desc px-3 py-2">
							<h4 class="mb-1 nunitoBold">Rendang</h4>
						<p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Barat</p>
						<p class="price mb-1">Rp 10,000 - 20,000</p>
						<div class="d-flex align-self-center">
						<img src="assets/icon/Stars.svg" height="23" alt="">
						<p class="totalComments">(149)</p>
						</div>
						</div>
						
					</div>
					</a>
					<a href="">
						<div class="card">
					<div class="love">
					<img src="assets/img/kuliner/bakso.png" alt="candi tikus">
						
					</div>
					<div class="desc px-3 py-2">
						<h4 class="mb-1 nunitoBold">Bakso</h4>
					<p class="mb-1"><i class="fa fa-map-marker"></i>Jawa Timur</p>
					<p class="price mb-1">Rp 10,000 - 20,000</p>
					<div class="d-flex align-self-center">
					<img src="assets/icon/Stars.svg" height="23" alt="">
					<p class="totalComments">(149)</p>
					</div>
					</div>
					
				</div>
				</a>
				<a href="">
					<div class="card">
				<div class="love">
				<img src="assets/img/kuliner/gado.png" alt="candi tikus">
					
				</div>
				<div class="desc px-3 py-2">
					<h4 class="mb-1 nunitoBold">Gado Gado</h4>
				<p class="mb-1"><i class="fa fa-map-marker"></i>DKI Jakarta</p>
				<p class="price mb-1">Rp 10,000 - 20,000</p>
				<div class="d-flex align-self-center">
				<img src="assets/icon/Stars.svg" height="23" alt="">
				<p class="totalComments">(149)</p>
				</div>
				</div>
				
			</div>
			</a>
			<a href="">
				<div class="card">
			<div class="love">
			<img src="assets/img/kuliner/sate.png" alt="candi tikus">
				
			</div>
			<div class="desc px-3 py-2">
				<h4 class="mb-1 nunitoBold">Sate</h4>
			<p class="mb-1"><i class="fa fa-map-marker"></i>Jawa Tengah</p>
			<p class="price mb-1">Rp 10,000 - 20,000</p>
			<div class="d-flex align-self-center">
			<img src="assets/icon/Stars.svg" height="23" alt="">
			<p class="totalComments">(149)</p>
			</div>
			</div>
			
		</div>
		</a>
		<a href="">
			<div class="card">
		<div class="love">
		<img src="assets/img/wisata/rendang.jpeg" alt="candi tikus">
			
		</div>
		<div class="desc px-3 py-2">
			<h4 class="mb-1 nunitoBold">Rendang</h4>
		<p class="mb-1"><i class="fa fa-map-marker"></i>Sumatera Barat</p>
		<p class="price mb-1">Rp 10,000 - 20,000</p>
		<div class="d-flex align-self-center">
		<img src="assets/icon/Stars.svg" height="23" alt="">
		<p class="totalComments">(149)</p>
		</div>
		</div>
		
	</div>
	</a>
				</div>
			</div>
				
		</div>
	</section>
	<!-- end Wisata Section -->

	<!-- Event Section Start -->
	<div class="scroll" id="gallery"></div>
	<section id="event">
		<div class="container">
			<div class="row mb-4">
				<div class="col-md-8 col-12">
					<h5 class="textOrange loraSemiBold">Event Terbaru</h5>
					<h2 class="loraBold mb-1">3 Event Terbaru Untuk Kamu</h2>
				</div>
				<div class="col-md-4 d-none d-md-flex align-self-end justify-content-end">
					<a href="event.php" class="btn backgroundOrange btn-pill px-4 mb-2">Lebih Banyak</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 my-2">
					<a href="event/aceh-culinary.php">
						<div class="card">
							<div class="love-event">
							<img src="event/aceh_culinary.jpeg" alt="candi tikus">
							<div class="iconLove">
								<p class="mb-2 ml-3"><i class="fas fa-user-friends"></i> 920</p>
							</div>	
							</div>
							<div class="desc px-3 py-2">
								<div class="row">
									<div class="col-9 ">
										<h4 class="mb-1 nunitoBold">Aceh Culinary</h4>
								<p class="mb-1"><i class="fa fa-map-marker"></i>Banda Aceh, Aceh</p>
								<p class="price mb-1">Rp 15,000</p>
									</div>
									<div class="col-3  align-self-center justify-content-center d-flex">
										<p class="nunitoBold textOrange  mb-0">Nov <span class="date">17</span></p>
									</div>
								</div>
								
								
							<p class="information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quaerat maiores officia maxime rerum...</p>
							</div>
							
						</div>
					</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 my-2">
				<a href="event/aceh-culinary.php">
					<div class="card">
						<div class="love-event">
						<img src="assets/img/event/event1.jpg" alt="candi tikus">
						<div class="iconLove">
							<p class="mb-2 ml-3"><i class="fas fa-user-friends"></i> 920</p>
						</div>	
						</div>
						<div class="desc px-3 py-2">
							<div class="row">
								<div class="col-9 ">
									<h4 class="mb-1 nunitoBold">Indonesia Art</h4>
							<p class="mb-1"><i class="fa fa-map-marker"></i>Surabaya, Jawa Timur</p>
							<p class="price mb-1">Rp 30,000</p>
								</div>
								<div class="col-3  align-self-center justify-content-center d-flex">
									<p class="nunitoBold textOrange  mb-0">Des <span class="date">17</span></p>
								</div>
							</div>
							
							
						<p class="information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quaerat maiores officia maxime rerum...</p>
						</div>
						
					</div>
				</a>
		</div>
		<div class="col-lg-4 col-md-6 col-12 my-2">
			<a href="event/aceh-culinary.php">
				<div class="card">
					<div class="love-event">
					<img src="assets/img/event/event2.jpg" alt="candi tikus">
					<div class="iconLove">
						<p class="mb-2 ml-3"><i class="fas fa-user-friends"></i> 210</p>
					</div>	
					</div>
					<div class="desc px-3 py-2">
						<div class="row">
							<div class="col-9 ">
								<h4 class="mb-1 nunitoBold">Tour de Singkarak</h4>
						<p class="mb-1"><i class="fa fa-map-marker"></i>Padang, Sumatera Barat</p>
						<p class="price mb-1">Rp 30,000</p>
							</div>
							<div class="col-3  align-self-center justify-content-center d-flex">
								<p class="nunitoBold textOrange  mb-0">Mei <span class="date">17</span></p>
							</div>
						</div>
						
						
					<p class="information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quaerat maiores officia maxime rerum...</p>
					</div>
					
				</div>
			</a>
	</div>
	
			
			</div>
			<div class="row justify-content-center d-flex mt-4 d-md-none">
				<a href="#" class="btn backgroundOrange btn-pill px-4 mb-2">Lebih Banyak</a>
			</div>
		</div>

		<!-- modal -->
		<div class="modal fade" id="publishLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Publish</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body" style="justify-items: center;display: grid;">
					<img src="assets/icon/Big Mark.svg" width="100">
				  <h4 class="text-center nunitoSemiBold mt-3">Untuk Publish Wisata, Kuliner atau Event Anda Harus Masuk Terlebih Dahulu</h4>
				  <a href="Login.php" class="btn btn-pillNonAnimation w-100 px-4 my-3 text-white">Masuk</a>
				</div>
			  </div>
			</div>
		  </div>
		<!-- end modal -->

	</section>
	<!-- Footer -->
	<div class="scroll" id="contact"></div>
	<footer class="page-footer font-small unique-color-dark">
		<!-- Contact -->
		<div id="footerQ" style="padding: 10px; color: white;">
			<div class="container text-md-left mt-5">


				<div class="row mt-3">

					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<h6 class="font-weight-bold">Apa Itu Travelinary ?</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<p class="footer-text">Tempat untuk mencari Wisata, Kuliner maupun Event yang ada di indonesia, tidak hanya itu selain mencari kamu juga bisa mempublish Wisata, Kuliner atau Event kamu</p>
					</div>
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

						<h6 class="text-uppercase font-weight-bold">Company</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<p class="footer-text">
							<a href="#" style="color: white;">Term Of Service</a>
						</p>
						<p class="footer-text">
							<a href="#" style="color: white;">Privacy & Policy</a>
						</p>
					</div>
					<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

						<h6 class="text-uppercase font-weight-bold">Kontak</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<p class="footer-text">
							<i class="fa fa-facebook mr-3"></i> Travelinary</p>
						<p class="footer-text">
							<i class="fa fa-instagram mr-3"></i> Travelinary</p>
						<p class="footer-text">
							<i class="fa fa-envelope mr-3"></i> Travelinary@gmail.com</p>

					</div>
					<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

						<h6 class="text-uppercase font-weight-bold">Support Us</h6>
						<hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
						<div class="row">
							<div class="col-2 col-md-1"></div>
							<div class="col-4 col-md-5">
								<img src="assets/logo/unesa.jpg" class="logo-unesa">
							</div>
							<div class="col-4 col-md-5">
								<img src="assets/logo/HIMTI UNESA.png" class="logo-ic">
							</div>
							<div class="col-2 col-md-1"></div>

						</div>

					</div>

				</div>

			</div>
		</div>
		<!-- End Contact -->

		<!-- Copyright -->
			<div class="footer-copyright text-center">
				<p class="nunitoRegular">© 2021 Copyright Akira Team</p> 
			</div>
		<!-- End Copyright -->

	</footer>
	<!-- End Footer -->

	<!-- Back to top -->
	<button id="btnTop" class="btnTop" title="Go to top"><i class="up"></i>TOP</button>
	<!-- End of Back to top -->

	<!-- Including JavaScript File Start -->
	  <!-- Including JavaScript File Start -->
	  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	  <script type="text/javascript" src="assets/js/popper.min.js"></script>
	  <script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="assets/js/tilt.jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- End of Including JavaScript File -->
	<script>
		$(document).ready(function() {
			let aman = localStorage.getItem('authLogin');
			if(aman){
				$('.nonAuth').addClass('d-none');
				$('.auth').removeClass('d-none');
			}else{
				$('.nonAuth').removeClass('d-none');
				$('.auth').addClass('d-none');
			}

			$('.logout').click(function(){
				localStorage.removeItem('authLogin');
				window.location.href = 'Login.php';
			})

$('.animationImg').tilt({
    maxTilt:6,
});
$('.animationImg2').tilt({
  maxTilt:6,
});

});
$(window).on('scroll', function() {
  let scrollTop = $(this).scrollTop();

  if(scrollTop > $('#hint .desc').offset().top - 300){
    $('#hint .desc h2').addClass('bottomToTop');
    $('#hint .desc h4').addClass('bottomToTop');
    $('#hint .desc a').addClass('bottomToTop');
    $('#hint .desc img').addClass('bottomToTop');
}

if(scrollTop > $('#hint .animationImg2').offset().top - 300){
  $('#hint .animationImg2 img').addClass('bottomToTop');
}
})
	</script>

</body>

</html>
