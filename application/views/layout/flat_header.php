<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Aisco</title>
  <link href="<?=base_url()?>assets/flat/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/flat/css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/flat/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/flat/css/lightbox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/flat/css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?=base_url()?>assets/flat/css/presets/preset1.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/flat/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?=base_url()?>assets/flat/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to website <span>Aisco</span></h1>
            <p class="animated fadeInRightBig">Learn - Fun - Friend</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#division">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(<?=base_url()?>assets/flat/images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>inovatif</span></h1>
            <p class="animated fadeInRightBig">Learn - Fun - Friend</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#division">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(<?=base_url()?>assets/flat/images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Learn - Fun - Friend</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#division">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#division"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="<?=base_url()?>assets/flat/images/aisco.png" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#division">Division</a></li>
            <li class="scroll"><a href="#about-us">About Us</a></li>
            <li class="scroll"><a href="#gallery">Gallery</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="division">Register divisi</a></li>
            <li class="scroll"><a href="makrab">register makrab</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
