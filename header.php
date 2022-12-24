<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tiana Coiffeur </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">
	      	<img src="images/Color logo - no background.png" alt="" style="width: 200px;height: 150px;">
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <?php

	      	$geturl = explode('/', $_SERVER['REQUEST_URI']);

	      ?>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item <?=($geturl['2']=='index.php' ? 'active' : '')?>"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item <?=($geturl['2']=='services.php' ? 'active' : '')?>"><a href="services.php" class="nav-link">Serviços</a></li>
	        	<li class="nav-item <?=($geturl['2']=='gallery.php' ? 'active' : '')?>"><a href="gallery.php" class="nav-link">Galeria</a></li>
	        	<li class="nav-item <?=($geturl['2']=='about.php' ? 'active' : '')?>"><a href="about.php" class="nav-link">Sobre nós</a></li>
	        	<!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
	          <li class="nav-item "><a href="index.php#agenda" class="nav-link">Contato</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <!-- END nav -->