<!DOCTYPE html>
<html>
	<head>
		<title><?= $title ?></title>
		<link rel="stylesheet" href="<?=base_url('assets') ?>/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="<?=base_url('assets') ?>/font-awesome/css/font-awesome.min.css" /> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	</head>
	<body>

		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    	<a class="navbar-brand" href="<?= site_url('dashboard') ?>">Bus
		    	</a>
		    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      		<li class="nav-item active">
				        <a class="nav-link" href="<?= site_url('dashboard') ?>">Home 
				        	<span class="sr-only">(current)</span>
				        </a>
		      		</li>

		      		<li class="nav-item">
		        		<a class="nav-link" href="<?php echo base_url('konfirmasi') ?>">Konfirmasi Pembayaran</a>
		      		</li>
		    	</ul>
		  	</div>
		</nav>
		<!-- end navbar -->