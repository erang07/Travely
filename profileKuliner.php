<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Including Start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- End of Meta Including -->

	<!-- Title Start -->
	<title>Profile | Travelinary</title>
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
	<link rel="stylesheet" href="assets/lib/select2/css/select2.min.css">
	<!-- <link rel="stylesheet" href="assets/font/font.css"> -->
	<script src="assets/js/fontawesome.js"></script>


	<!-- End of Including File -->

</head>

<body>
    <!-- Header Start -->
	<input type="checkbox" id="check"></input>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.html">
			<img src="assets/logo/travelinary.png" height="50" alt="Logo Travelinary">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav mx-auto">
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="index.html">Beranda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="destinasi.html">
				  Destinasi
				</a>
			  </li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="event.html">Event</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nunitoSemiBold" href="#contact">Kontak</a>
			</li>
		  </ul>
		  <div class="auth avatar">
			<div class="d-flex align-items-center">
				<div class="col-12 pl-0">
					<a
					class="nunitoRegular align-items-center d-flex dropdown-toggle"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="assets/icon/Photo Profile.svg" width="40" alt="">
					<h5 class="nunitoSemiBold ml-2 my-0">Apin</h5> <i class="fas ml-1 fa-angle-down"></i>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">
						<i class="fas mr-2 fa-user"></i>
						Profile</a>
					<a class="dropdown-item logout" href="#">
						<i class="fas mr-2 fa-sign-out-alt"></i>
						Logout</a>
				</div>
				</div>
			</div>
		</div>
		</div>
	  </nav>
      
    <section id="avatar">
        <div class="container">
            <div class="row justify-content-center align-items-center">
				<img src="assets/icon/Photo Profile.svg" width="100" alt="">
				<div class="avatar ml-4">
					<h2>Apin</h2>
					  <a href="javascript:void(0)" class="btn btn-gray px-4" data-toggle="modal" data-target=".modal-profile">
						Edit Profile</a>
				</div>
			</div>
        </div>
	</section>
	
	<section id="profilePost">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-12 mb-2">
					<h5 class="textOrange loraSemiBold">Publish Wisata, Kuliner, Atau Event Kamu</h5>
					<h2 class="loraBold">Beberapa Wisata, Kuliner atau Event 
						yang Anda Publish</h2>
				</div>
				<div class="col-md-4 col-12 mb-2 justify-content-end d-flex align-self-center">
					<button type="button"
					class="btn btn-pill nunitoBold px-4 dropdown-toggle"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Publish
				</button>
				<div class="dropdown-menu">
					<a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target=".modal-wisata" >
						<i class="fas mr-2 fa-map-marked-alt"></i>
						Wisata</a>
					<a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target=".modal-kuliner" >
						<i class="fas mr-3 fa-utensils"></i>
						Kuliner</a>
					<a  href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target=".modal-event">
						<i class="fas mr-3 fa-calendar-alt"></i>
						Event</a>
				</div>
				</div>
			</div>
			<div class="row my-4">
				<ul class="nav nav-tabs col-12">
					<li class="nav-item">
					  <a class="nav-link" href="profileWisata.html">Wisata <span class="total">2</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link active" href="profileKuliner.html">Kuliner <span class="total">3</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="profileEvent.html">Event <span class="total">5</span></a>
					</li>
				  </ul>
			</div>
			<div class="row">
				<div class="col-12 col-lg-3 col-md-4 my-2">
					<a href="">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/candi-tikus.jpg" alt="candi tikus">
								<div class="statusIcon">
									<p class="btn btn-gray text-success px-3">Success</p>
								</div>
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
				<div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/candi-tikus.jpg" alt="candi tikus">
								<div class="statusIcon">
									<p class="btn btn-gray text-warning px-3">Proses</p>
								</div>
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

				<div class="col-12 col-lg-3 col-md-4 my-2">
                    <a href="">
                        <div class="card">
                            <div class="love">
                                <img src="assets/img/wisata/candi-tikus.jpg" alt="candi tikus">
								<div class="statusIcon">
									<p class="btn btn-gray text-warning px-3">Proses</p>
								</div>
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
		<!-- modal -->
		<!-- wisata -->
		<div class="modal fade modal-wisata" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Publish Wisata</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<form class="pb-4 pt-2">
						<div class="form-group">
						  <label for="judul">Judul</label>
						  <input type="email" class="form-control" id="judul">
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" id="harga">
						  </div>
						  
						  		  
						  <div class="form-group">
							<label for="provinsi23" class="d-block">Provinsi</label>
							<select class="js-example-basic-single" class="form-control" id="provinsi23" name="state">
								<option value="Jawa Timur">Jawa Timur</option>
								<option value="Jawa Barat">Jawa Barat</option>
								<option value="Jawa Tengah">Jawa Tengah</option>
								<option value="Sulawesi Tengah">Sulawesi Tengah</option>
								<option value="Sulawesi Utara">Sulawesi Utara</option>
								<option value="Sulawesi Barat">Sulawesi Barat</option>
								<option value="Sulawesi Selatan">Sulawesi Selatan</option>
								<option value="Kalimantan Timur">Kalimantan Timur</option>
								<option value="Kalimantan Selatan">Kalimantan Selatan</option>
								<option value="Kalimantan Tengah">Kalimantan Tengah</option>
								<option value="Kalimantan Barat">Kalimantan Barat</option>
							  </select>
						  </div>
						  <div class="form-group">
							<label for="kota32">Kota</label>
							<select class="js-example-basic-multiple" id="kota32" style="width:100%;" name="states[]" multiple="multiple">
								<option value="Mojokerto">Mojokerto</option>
								<option value="Surabaya">Surabaya</option>
								<option value="Malang">Malang</option>
								<option value="Probolinggo">Probolinggo</option>
								<option value="Kediri">Kediri</option>
								<option value="Blitar">Blitar</option>
							</select>
						  </div>

						  <div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat">
						  </div>
		
						  <div class="form-group col-12 d-flex p-0 align-items-center mt-4">
							<div class="col-8 pl-0">
								<input type="file" id="foto1"
								name="photo" style="display:none"
								onchange="document.getElementById('filename2').value=this.value">
								<input type="text" placeholder="Foto 1" class="form-control" id="filename2">
							</div>
							<div class="col-4 p-0">
								<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
								onclick="document.getElementById('foto1').click()">
							</div>
						</div>
		
						<div class="form-group col-12 d-flex p-0 align-items-center mt-4">
							<div class="col-8 pl-0">
								<input type="file" id="foto2"
								name="photo" style="display:none"
								onchange="document.getElementById('filename3').value=this.value">
								<input type="text" placeholder="Foto 2" class="form-control" id="filename3">
							</div>
							<div class="col-4 p-0">
								<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
								onclick="document.getElementById('foto2').click()">
							</div>
						</div>
		
						<div class="form-group col-12 d-flex p-0 align-items-center mt-4">
							<div class="col-8 pl-0">
								<input type="file" id="foto13"
								name="photo" style="display:none"
								onchange="document.getElementById('filename4').value=this.value">
								<input type="text" placeholder="Foto 3" class="form-control" id="filename4">
							</div>
							<div class="col-4 p-0">
								<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
								onclick="document.getElementById('foto13').click()">
							</div>
						</div>
		
						<div class="form-group">
							<label>Jam Buka</label>
							<div class="d-flex align-items-center mb-2">
								<p class="my-0 mx-2 txt-mute1">Senin</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Selasa</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Rabu</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Kamis</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Jumat</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Sabtu</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Minggu</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
						  </div>
						  <div class="form-group">
							  <label for="description1">Deskripsi</label>
							  <textarea name="deskripsi" id="description1" style="width:100%;" rows="4"></textarea>
						  </div>
						<div class="d-flex align-items-center">
							<img src="assets/icon/Small Mark.svg" width="24" alt="">
							<p class="m-0 ml-2">
							Tunggu maksimal 1X24 jam untuk di setujui admin
							</p>
						</div>
						<button type="submit" class="btn btn-pill w-100 px-4 mt-3">Publish</button>
					  </form>
				  </div>
				  <form>
			  </div>
			</div>
		</div>
		<!-- end wisata -->

		<!-- kuliner -->
		<div class="modal fade modal-kuliner" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Publish Kuliner</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<form class="pb-4 pt-2">
						<div class="form-group">
						  <label for="judul2">Judul</label>
						  <input type="email" class="form-control" id="judul2">
						</div>
						<div class="form-group">
							<label for="harga2">Harga</label>
							<div class="d-flex align-items-center">
								<input type="text" class="form-control" id="harga2">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
								<input type="text" class="form-control">
							</div>
						  </div>
						  
						  		  
						  <div class="form-group">
							<label for="provinsi39" class="d-block">Provinsi</label>
							<select class="js-example-basic-single" class="form-control" id="provinsi39" name="state">
								<option value="Jawa Timur">Jawa Timur</option>
								<option value="Jawa Barat">Jawa Barat</option>
								<option value="Jawa Tengah">Jawa Tengah</option>
								<option value="Sulawesi Tengah">Sulawesi Tengah</option>
								<option value="Sulawesi Utara">Sulawesi Utara</option>
								<option value="Sulawesi Barat">Sulawesi Barat</option>
								<option value="Sulawesi Selatan">Sulawesi Selatan</option>
								<option value="Kalimantan Timur">Kalimantan Timur</option>
								<option value="Kalimantan Selatan">Kalimantan Selatan</option>
								<option value="Kalimantan Tengah">Kalimantan Tengah</option>
								<option value="Kalimantan Barat">Kalimantan Barat</option>
							  </select>
						  </div>
						  <div class="form-group">
							<label for="kota39">Kota</label>
							<select class="js-example-basic-multiple" id="kota39" style="width:100%;" name="states[]" multiple="multiple">
								<option value="Mojokerto">Mojokerto</option>
								<option value="Surabaya">Surabaya</option>
								<option value="Malang">Malang</option>
								<option value="Probolinggo">Probolinggo</option>
								<option value="Kediri">Kediri</option>
								<option value="Blitar">Blitar</option>
							</select>
						  </div>
							
						  <div class="form-group">
							<label for="alamat2">Alamat</label>
							<input type="text" class="form-control" id="alamat2">
						  </div>
		
						  <div class="form-group col-12 d-flex p-0 align-items-center mt-4">
							<div class="col-8 pl-0">
								<input type="file" id="foto4"
								name="photo" style="display:none"
								onchange="document.getElementById('filename5').value=this.value">
								<input type="text" placeholder="Foto 1" class="form-control" id="filename5">
							</div>
							<div class="col-4 p-0">
								<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
								onclick="document.getElementById('foto4').click()">
							</div>
						</div>
		
						<div class="form-group col-12 d-flex p-0 align-items-center mt-4">
							<div class="col-8 pl-0">
								<input type="file" id="foto12"
								name="photo" style="display:none"
								onchange="document.getElementById('filename6').value=this.value">
								<input type="text" placeholder="Foto 2" class="form-control" id="filename6">
							</div>
							<div class="col-4 p-0">
								<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
								onclick="document.getElementById('foto12').click()">
							</div>
						</div>
		
						<div class="form-group col-12 d-flex p-0 align-items-center mt-4">
							<div class="col-8 pl-0">
								<input type="file" id="foto3"
								name="photo" style="display:none"
								onchange="document.getElementById('filename7').value=this.value">
								<input type="text" placeholder="Foto 3" class="form-control" id="filename7">
							</div>
							<div class="col-4 p-0">
								<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
								onclick="document.getElementById('foto3').click()">
							</div>
						</div>
		
						<div class="form-group">
							<label>Jam Buka</label>
							<div class="d-flex align-items-center mb-2">
								<p class="my-0 mx-2 txt-mute1">Senin</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Selasa</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Rabu</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Kamis</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Jumat</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Sabtu</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
							<div class="d-flex align-items-center my-2">
								<p class="my-0 mx-2 txt-mute1">Minggu</p>
								<input type="text" class="form-control" placeholder="7.00">
								<p class="my-0 mx-2 txt-mute">Sampai</p>
							<input type="text" class="form-control" placeholder="16.00">
							</div>
						  </div>
						  <div class="form-group">
							  <label for="description2">Deskripsi</label>
							  <textarea name="deskripsi" id="description2" style="width:100%;" rows="4"></textarea>
						  </div>
						<div class="d-flex align-items-center">
							<img src="assets/icon/Small Mark.svg" width="24" alt="">
							<p class="m-0 ml-2">
							Tunggu maksimal 1X24 jam untuk di setujui admin
							</p>
						</div>
						<button type="submit" class="btn btn-pill w-100 px-4 mt-3">Publish</button>
					  </form>
				  </div>
				  <form>
			  </div>
			</div>
		</div>
		<!-- end kuliner -->

			<!-- Event -->
			<div class="modal fade modal-event" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Publish Event</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form class="pb-4 pt-2">
							<div class="form-group">
							  <label for="judul3">Judul</label>
							  <input type="email" class="form-control" id="judul3">
							</div>
							<div class="form-group">
								<label for="harga3">Harga</label>
									<input type="text" class="form-control" id="harga3">
							  </div>

							  <div class="form-group">
								<label for="address">Alamat</label>
									<input type="text" class="form-control" id="address">
							  </div>

							  <div class="form-group">
								<label for="goomap">Link Google Map</label>
									<input type="text" class="form-control" id="goomap">
							  </div>
							  
							  <div class="form-group">
								<label for="provinsi3" class="d-block">Provinsi</label>
								<select class="js-example-basic-single" class="form-control" id="provinsi3" name="state">
									<option value="Jawa Timur">Jawa Timur</option>
									<option value="Jawa Barat">Jawa Barat</option>
									<option value="Jawa Tengah">Jawa Tengah</option>
									<option value="Sulawesi Tengah">Sulawesi Tengah</option>
									<option value="Sulawesi Utara">Sulawesi Utara</option>
									<option value="Sulawesi Barat">Sulawesi Barat</option>
									<option value="Sulawesi Selatan">Sulawesi Selatan</option>
									<option value="Kalimantan Timur">Kalimantan Timur</option>
									<option value="Kalimantan Selatan">Kalimantan Selatan</option>
									<option value="Kalimantan Tengah">Kalimantan Tengah</option>
									<option value="Kalimantan Barat">Kalimantan Barat</option>
								  </select>
							  </div>
							  <div class="form-group">
								<label for="kota3">Kota</label>
								<select class="js-example-basic-multiple" id="kota3" style="width:100%;" name="states[]" multiple="multiple">
									<option value="Mojokerto">Mojokerto</option>
									<option value="Surabaya">Surabaya</option>
									<option value="Malang">Malang</option>
									<option value="Probolinggo">Probolinggo</option>
									<option value="Kediri">Kediri</option>
									<option value="Blitar">Blitar</option>
								</select>
							  </div>
								
							  <div class="form-group">
								<label for="alamat3">Tanggal Event</label>
								<input type="date" class="form-control" id="alamat3">
							  </div>
			
							  <div class="form-group col-12 d-flex p-0 align-items-center mt-4">
								<div class="col-8 pl-0">
									<input type="file" id="fotoEvent"
									name="photo" style="display:none"
									onchange="document.getElementById('filename1').value=this.value">
									<input type="text" placeholder="Foto" class="form-control" id="filename1">
								</div>
								<div class="col-4 p-0">
									<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Tambah Foto"
									onclick="document.getElementById('fotoEvent').click()">
								</div>
							</div>
							  <div class="form-group">
								  <label for="description3">Deskripsi</label>
								  <textarea name="deskripsi" id="description3" style="width:100%;" rows="4"></textarea>
							  </div>
							<div class="d-flex align-items-center">
								<img src="assets/icon/Small Mark.svg" width="24" alt="">
								<p class="m-0 ml-2">
								Tunggu maksimal 1X24 jam untuk di setujui admin
								</p>
							</div>
							<button type="submit" class="btn btn-pill w-100 px-4 mt-3">Publish</button>
						  </form>
					  </div>
					  <form>
				  </div>
				</div>
			</div>
			<!-- end wisata -->

			<!-- edit profile -->
			<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form class="pb-4 pt-2">
							<div class="form-group">
							  <label for="nama">Nama</label>
							  <input type="text" class="form-control" id="nama">
							</div>
							<div class="form-group col-12 d-flex p-0 align-items-center mt-4">
								<div class="col-8 pl-0">
									<input type="file" id="foto21"
									name="photo" style="display:none"
									onchange="document.getElementById('filename81').value=this.value">
									<input type="text" placeholder="Pilih Foto" class="form-control" id="filename81">
								</div>
								<div class="col-4 p-0">
									<input type="button" class="btn btn-pill-stroke bg-white w-100" value="Ubah Foto"
									onclick="document.getElementById('foto21').click()">
								</div>
							</div>
							  <div class="form-group">
								<label for="provinsi2" class="d-block">Provinsi</label>
								<select class="js-example-basic-single" class="form-control" id="provinsi2" name="state">
									<option value="Jawa Timur">Jawa Timur</option>
									<option value="Jawa Barat">Jawa Barat</option>
									<option value="Jawa Tengah">Jawa Tengah</option>
									<option value="Sulawesi Tengah">Sulawesi Tengah</option>
									<option value="Sulawesi Utara">Sulawesi Utara</option>
									<option value="Sulawesi Barat">Sulawesi Barat</option>
									<option value="Sulawesi Selatan">Sulawesi Selatan</option>
									<option value="Kalimantan Timur">Kalimantan Timur</option>
									<option value="Kalimantan Selatan">Kalimantan Selatan</option>
									<option value="Kalimantan Tengah">Kalimantan Tengah</option>
									<option value="Kalimantan Barat">Kalimantan Barat</option>
								  </select>
							  </div>
							  <div class="form-group">
								<label for="kota2">Kota</label>
								<select class="js-example-basic-multiple" id="kota2" style="width:100%;" name="states[]" multiple="multiple">
									<option value="Mojokerto">Mojokerto</option>
									<option value="Surabaya">Surabaya</option>
									<option value="Malang">Malang</option>
									<option value="Probolinggo">Probolinggo</option>
									<option value="Kediri">Kediri</option>
									<option value="Blitar">Blitar</option>
								</select>
							  </div>
			

			
							<button type="submit" class="btn btn-pill w-100 px-4 mt-3">Ubah Profile</button>
						  </form>
					  </div>
					  <form>
				  </div>
				</div>
			</div>
			<!-- end edit profile -->
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
	<script src="assets/lib/select2/js/select2.min.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- End of Including JavaScript File -->
	<script>
		  $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
          $('.js-example-basic-single').select2();

		  $('.logout').click(function(){
				localStorage.removeItem('authLogin');
				window.location.href = 'Login.html';
			})
      });
	</script>

</body>

</html>
