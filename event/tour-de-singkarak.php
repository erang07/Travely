<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Including Start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- End of Meta Including -->

	<!-- Title Start -->
	<title>Tour de Singkarak | Travelinary</title>
	<!-- End of Title -->

	<!-- CSS and JavaScript Including File -->
	<link rel="icon" type="image/png" href="../assets/logo/travelinaryIcon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/lib/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/lib/owlcarousel/owl.theme.default.min.css">
	<!-- <link rel="stylesheet" href="../assets/font/font.css"> -->
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/js/fontawesome.js"></script>


	<!-- End of Including File -->

</head>

<body>

	<!-- Header Start -->
	<input type="checkbox" id="check"></input>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="../index.php">
			<img src="../assets/logo/travelinary.png" height="50" alt="Logo Travelinary">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav mx-auto">
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="../index.php">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="../destinasi.php">
				  Destinasi
				</a>
			  </li>
			<li class="nav-item active">
				<a class="nav-link nunitoSemiBold" href="../event.php">Event</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="#contact">Kontak</a>
			</li>
		  </ul>
		  <div class="nonAuth d-none">
			<a href="../Login.php" class="nunitoSemiBold mr-3">Masuk</a>
			<a href="../register.php" class="btn btn-pill px-4">Daftar</a>
		  </div>
		  <div class="auth avatar d-none">
			<div class="d-flex align-items-center">
				<div class="col-12 pl-0">
					<a
					class="nunitoRegular align-items-center d-flex dropdown-toggle"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="../assets/icon/Photo Profile.svg" width="40" alt="">
					<h5 class="nunitoSemiBold ml-2 my-0">Apin</h5> <i class="fas ml-1 fa-angle-down"></i>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../profileWisata.php">
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

	<!-- Start of Content -->
    <section id="detail-page">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					<center>
					<h2 class="font-weight-bold mb-3 header-mobile">Tour de Singkarak</h2>
					<div class="owl-carousel owl-theme detailPost mb-4">
						<div class="items">
							<img src="../assets/img/event/event2.jpg" alt="">
						</div>
						<div class="items">

							<img src="../assets/img/event/event2.jpg" alt="">
						</div>
						<div class="items">

							<img src="../assets/img/event/event2.jpg" alt="">
						</div>

					</div>
					<div>
						<p align="justify" class="slide-text nunitoRegular">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p align="justify" class="slide-text nunitoRegular">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p align="justify" class="slide-text nunitoRegular">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
                    <div class="mt-4">
                    <button class="btn btn-md btn-pill-light mr-5"><i class="fa fa-share"></i> Bagikan</button>
                    <button class="btn btn-md btn-pill"><i class="fa fa-shopping-cart"></i> Beli Tiket</button>
                    </div>
					</center>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3 sidebar nunitoRegular">
					<h2 class="font-weight-bold header-desktop">Indonesia Art Mart</h2>
					<div class="informasi mt-4">
						<h5 class="font-weight-bold">Harga</h5>
						<p>Rp. 50.000</p>
						<h5 class="font-weight-bold">Lokasi</h5>
						<p>Padang, Sumatera Barat</p>
                        <h5 class="font-weight-bold">Google Maps</h5>
						<a href="https://goo.gl/maps/56Gmeo5daJgkUYzA8" class="textOrange">https://goo.gl/maps/QWA4f6XUJBSxxiei6</a>
						
						<div class="auth-detail mt-3">
							<div class="d-flex align-items-center">
								<img src="../assets/icon/Photo Profile.svg" width="40" alt="">
								<h5 class="nunitoSemiBold ml-3 my-0">Apin</h5>
							</div>
						</div>
                        <h5 class="mt-3 font-weight-bold">Info Lebih Lanjut</h5>
						<p>
							<i class="fa fa-whatsapp"></i> 08123456789 <br>
							<i class="fa fa-envelope" aria-hidden="true"></i> akira-team@mail.com
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End of Content -->

	<br>
	<br>
	<br>
	<br>
	<br>
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
								<img src="../assets/logo/unesa.jpg" class="logo-unesa">
							</div>
							<div class="col-4 col-md-5">
								<img src="../assets/logo/HIMTI UNESA.png" class="logo-ic">
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
	<script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="../assets/js/script.js"></script>
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
		window.location.href = '../Login.php';
	})

	$('.detailPost').owlCarousel({
      loop:true,
      nav:false,
      items:1,
  })
});
</script>

</body>

</html>
