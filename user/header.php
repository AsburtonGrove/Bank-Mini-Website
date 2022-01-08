<?php
	session_start();
	include '../koneksi.php';
	if(!isset($_SESSION['status_login'])) {
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
	
	<!-- navbar -->
	<div class="navbar">

		<div class="container">

			<!-- navbar brand -->
			<h2 class="nav-brand float-left"><a href="index.php">Bank Mini</a></h2>

			<!-- navbar menu -->
			<ul class="nav-menu float-left">
				<li><a href="index.php">Dashboard</a></li>
				<li><a href="penarikan.php">penarikan bunga</a></li>
				<li><a href="dijaminkan.php">penjaminan</a></li>
				<li><a href="penutupan.php">penutupan rekening</a></li>
				<li>
					<a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

					<!-- sub menu -->
					<ul class="dropdown">
						<li><a href="ubah-password.php">Change password</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>

			<div class="clearfix"></div>
		</div>

	</div>