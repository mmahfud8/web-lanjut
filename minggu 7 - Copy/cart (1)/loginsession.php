<?php
session_start();

if (isset ($_POST['Login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	include "koneksi.php";
	$sql = "SELECT * from user where nama";									
	$hasil = $conn->query($sql);
	if($hasil->num_rows > 0){
		while($row = $hasil->fetch_assoc()){
	//periksa login
	if (($user == $row['nama'] && $pass == $row['password']) OR ($user == $row['nama'] && $pass == $row['password'])) {
		//menciptakan session
		$_SESSION['login'] = $user;
		$_SESSION['role'] = "guest";

		if($user == "admin"){
			$_SESSION['role'] = "admin";
		}
		
		//menuju ke halaman product
		header("location:list-product.php");
	}else{
		header("location:loginsession.php"); 
	}}}
} else {
	?>
	<!-- <html>
	<head>
		<title>Form Log In</title>
	</head>
	<body>
	<form action="" method="post">
	<h2>Login Here...</h2>
	Username : <input type="text" name="user"><br>
	Password : <input type="password" name="pass"><br>
	<input type="submit" name="Login" value="Log In">
	</form>
	</body>
	</html> -->


	<!DOCTYPE html>
	<html lang="en">

	<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Pages / Login - NiceAdmin Bootstrap Template</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="../NiceAdmin/assets/img/favicon.png" rel="icon">
	<link href="../NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="../NiceAdmin/assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
	* Template Name: NiceAdmin - v2.2.2
	* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
	</head>

	<body>

	<main>
		<div class="container">

		<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
			<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

				<div class="d-flex justify-content-center py-4">
					<a href="index.html" class="logo d-flex align-items-center w-auto">
					<img src="../NiceAdmin/assets/img/logo.png" alt="">
					<span class="d-none d-lg-block">NiceAdmin</span>
					</a>
				</div><!-- End Logo -->

				<div class="card mb-3">

					<div class="card-body">

					<div class="pt-4 pb-2">
						<h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
						<p class="text-center small">Enter your username & password to login</p>
					</div>

					<form class="row g-3 needs-validation" novalidate action="" method="post">

						<div class="col-12">
						<label for="yourUsername" class="form-label">Username</label>
						<div class="input-group has-validation">
							<input type="text" name="user" class="form-control" id="yourUsername" required>
							<div class="invalid-feedback">Please enter your username.</div>
						</div>
						</div>

						<div class="col-12">
						<label for="yourPassword" class="form-label">Password</label>
						<input type="password" name="pass" class="form-control" id="yourPassword" required>
						<div class="invalid-feedback">Please enter your password!</div>
						</div>

						<div class="col-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
							<label class="form-check-label" for="rememberMe">Remember me</label>
						</div>
						</div>
						<div class="col-12">
						<button class="btn btn-primary w-100" type="submit" name="Login" value="Log In">Login</button>
						</div>
						<div class="col-12">
						<p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
						</div>
					</form>

					</div>
				</div>

				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>

				</div>
			</div>
			</div>

		</section>

		</div>
	</main><!-- End #main -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="../NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/quill/quill.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="../NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="../NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="../NiceAdmin/assets/js/main.js"></script>

	</body>

	</html>
	<?php 
} 
?>