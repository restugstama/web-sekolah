<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<base href="<?=base_url();?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url('assets/images/logo-hm.png');?>">
	<title>HOTs Edu</title>
	<meta name="description" content="">
	<meta name="keywords" content="">  

	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/jquery.fancybox.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/responsive.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/animate.css')?>">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.fancybox.min.js')?>"></script>
	<script src="<?=base_url('assets/js/wow.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery-ui.js')?>"></script>
	<link rel="stylesheet" href="<?=base_url('assets/css/jquery-ui.css')?>">

	<script src="<?=base_url('assets/js/jquery.number.min.js')?>"></script>
	<script src="<?=base_url('assets/js/main.js')?>"></script>

	<!-- select2 -->
	<script src="<?=base_url();?>assets/admin/plugins/select2/select2.min.js"></script>
	<link href="<?= base_url(); ?>assets/admin/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
	<!-- <script src="<?=base_url('assets/js/select2.min.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/select2.min.css')?>"> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body>
	<header>
		<nav id="navigation" >
			<div class="container-fluid">
				<a href="" class="logo">
					<img class="navbar-logo" src="<?= base_url('assets/images/logo_default.png'); ?>">
				</a> 
				<a aria-label="mobile menu" class=nav-toggle>
					<span></span>
					<span></span>
					<span></span>
				</a>
				<ul class="menu-left" style="">
					<li><a href="#Pendaftaran">Tentang kami!</a></li>
					<li><a href="#Pendaftaran">Gallery</a></li>
					<li><a href="#Pendaftaran">Pendaftaran</a></li>
				</ul>

				<ul class="menu-right" >
					<li><a href="#" type="button" class="li-login btn-kedua" data-toggle="modal" data-target="#modalLogin">Login</a></li>
					<li><a href="#" class="li-register btn-utama white">Register<i class="fa fa-arrow-right"></i></a></li>
				</ul>
			</div>
			<!-- <div class="container-fluid container-nav">
				<a href="" class="logo">
					<img class="navbar-logo" src="<?=base_url('assets/images/logo-hots.png')?>">
				</a>
				<a aria-label="mobile menu" class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
				</a>
				<ul class="menu-left"> 
					<li><a href="<?=base_url('#about')?>">About</a></li> 
					<li><a href="<?=base_url('#service')?>">Service</a></li>
					<li><a href="<?=base_url('#product')?>">Product</a></li>
					<li><a href="<?=base_url('#contact')?>">Contact</a></li>
				</ul>
				<?php if($this->session->userdata('login') == NULL) { ?>
					<ul class="menu-right">
						<li><a href="" type="button" class="li-login btn-kedua" data-toggle="modal" data-target="#modalLogin">Login</a></li>
						<li><a href="<?=base_url('Register')?>" class="li-register btn-utama white">Register <i class="fa fa-arrow-right"></i></a></li>
					</ul>
				<?php }else{ ?>
					<ul class="menu-right">
						<li><a href="<?=base_url('dashboard')?>" class="li-register btn-kedua">Dashboard</a></li>
						<li><a href="<?=base_url('logout')?>" class="li-logout btn-pols" style="color: #FF4C13;">Logout</a></li>
					</ul>
				<?php } ?>
			</div> -->
</body>
</html>