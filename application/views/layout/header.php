<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Aisco</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="<?=base_url()?>assets/aisco/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url()?>assets/aisco/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url()?>assets/aisco/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url()?>assets/aisco/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url()?>assets/aisco/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url()?>assets/aisco/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?=base_url()?>assets/aisco/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="http://vjs.zencdn.net/6.2.7/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
        <link rel="stylesheet" href="<?=base_url()?>assets/aisco/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/aisco/css/style.css">

        <!-- If you'd like to support IE8 -->
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/aisco/css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="<?=base_url()?>assets/aisco/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    </head>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>

		<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">


					<!--end of row-->


					<div class="row nav-menu">
						<div class="col-sm-3 col-md-2 columns">
							<a href="<?=base_url()?>">
								<img class="logo logo-light" alt="Logo" src="<?=base_url()?>assets/aisco/img/logo.png">
								<img class="logo logo-dark" alt="Logo" src="<?=base_url()?>assets/aisco/img/logo-black.png">
							</a>
						</div>

						<div class="col-sm-9 col-md-10 columns">
							<ul class="menu">
								<li><a href="<?=base_url()?>">Home</a></li>


								<li class="has-dropdown"><a href="#">Creation</a>
									<ul class="subnav">
										<li><a href="gallery">Gallery</a></li>
										<li><a href="video">Video</a></li>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Contact</a>
									<ul class="subnav">
									</ul>
								</li>

                <?php if (isset($_SESSION['logged_in']) == true && isset($_SESSION['owner']) == true){ ?>
                  <li><a href='<?=base_url()?>admin'>admin</a></li>
                  <li><a href='<?=base_url()?>auth/logout'>logout</a></li>

                <?php }else if(isset($_SESSION['logged_in']) == true){ ?>
                  <li><a href='<?=base_url()?>auth/logout'>logout</a></li>
                <?php }else{ ?>

                  <li><a href='<?=base_url()?>auth/login'>Login</a></li>

                <?php } ?>


							</ul>

							<ul class="social-icons text-right">
								<li>
									<a href="#">
										<i class="icon social_twitter"></i>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon social_instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!--end of row-->

					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>

				</div><!--end of container-->
			</nav>
		</div>
