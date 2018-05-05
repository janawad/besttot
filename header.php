<?php
	require "admin/clasess/home.class.php";
	$homeObj = new home();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Best Tutorials</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Styles -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/revolution.css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link href="css/responsive.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="css/color/color.css" title="color" />
	</head>


	<body>
		<div class="page-loader">
			<div class="spinner">
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
				<div class="cube"></div>
			</div>
		</div><!-- Page Loader -->


		<header>
			<div class="container">
				<div class="header-logo">
					<a href="index.php" title=""><img src="images/logo.png" alt="" /></a>
				</div><!-- Logo -->
				<div class="menu">
					<nav>
						<ul>
							<li><a href="index.php" title="Home">Home</a></li>
							<li><a href="about.php" title="About Us">About Us</a></li>
							<li><a href="#" title="">ADMISSIONS</a>
								<ul>
									<li><a href="enqiure.php" title="">Online Enquiry Form</a></li>
									<li><a href="application.pdf" title="Download application form" Download="application">Application Form</a></li>
								</ul>
							</li>
							
							<li><a href="gallery.php" title="Gallery">Gallery</a></li>
							
							<li><a href="announcement.php" title="">Announcements</a></li>
							
						</ul>
					</nav><!-- Navigation -->

					<div class="social">
						<a href="#" title=""><i class="fa fa-facebook"></i></a>
						<a href="#" title=""><i class="fa fa-twitter"></i></a>
						<a href="#" title=""><i class="fa fa-pinterest"></i></a>
					</div>
				</div><!-- Menu Bar -->
			</div>
		</header><!-- Header -->


		<div class="responsive-header">
			<div class="responsive-logo">
				<a href="#" title=""><img src="images/logo.png" alt="Logo" /></a>
			</div><!-- Responsive Logo -->	
			<span><i class="fa fa-align-justify"></i></span>
			<ul>
				<li><a href="index.php" title="Home">Home</a></li>
				<li><a href="about.php" title="About Us">About Us</a></li>
				<li><a href="#" title="">ADMISSIONS</a>
					<ul>
						<li><a href="enqiure.php" title="">Online Enquiry Form</a></li>
						<li><a href="application.pdf" title="Download application form" Download="application">Application Form</a></li>
					</ul>
				</li>
				
				<li><a href="gallery.php" title="Gallery">Gallery</a></li>
				
				<li><a href="announcement.php" title="">Announcements</a></li>
				
			</ul>
		</div><!--Responsive header -->