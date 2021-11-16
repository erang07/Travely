<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['name'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM login WHERE name='$name'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO login (name, password)
                    VALUES ('$name', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

	<!-- Meta Including Start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- End of Meta Including -->

	<!-- Title Start -->
	<title>Register | Travelinary</title>
	<!-- End of Title -->

	<!-- CSS and JavaScript Including File -->
	<link rel="icon" type="image/png" href="assets/logo/travelinaryIcon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/tes.css">
	<script src="assets/js/fontawesome.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
	<!-- End of Including File -->

</head>

<body>

	<!-- Logo -->
	<div class="logo">
		<img src="assets/logo/travelinary.png" alt="Logo Travelinary">
	</div>
	<!-- End of Logo -->

	<!-- Box Register Start -->
	<div class="box">
		<h3>Daftar</h3>
		<form action="" methode="POST">
			<div class="inputBox">
				<input type="text" name="" required></input>
				<label>Nama Lengkap</label>
				<span class="input nama"></span>
			</div>
			
			<div class="inputBox">
				<input type="password" name="" required></input>
				<label>Password</label>
				<span class="input pass"></span>
			</div>
			<div class="inputBox">
				<input type="password" name="" required></input>
				<label>Re-Password</label>
				<span class="input pass"></span>
			</div>
			<div class="d-flex justify-content-between align-items-center mt-4">
				<!-- <a href="javascript:void(0)" class="authLogin"><input type="button" name="" value="Daftar"></input></a> -->
				<a href="login.php" class="mb-0 pb-0">Sudah punya akun?</a>
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
	</div>
	<!-- End of Box Register -->

	<!-- Contact Start -->
	<div class="contact">
		<ul>
			<li><a href=""><span title="Facebook"></span></a></li>
			<li><a href=""><span title="Instagram"></span></a></li>
			<li><a href=""><span title="Twitter"></span></a></li>
			<li><a href=""><span title="WhatsApp"></span></a></li>
			<li><a href=""><span title="Gmail"></span></a></li>
		</ul>
	</div>
	<!-- End of Contact -->

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
