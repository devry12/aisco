<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Makrab</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
        <link rel="stylesheet" href="<?=base_url()?>assets/flat/form/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/flat/form/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/flat/form/assets/css/animate.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/flat/form/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->

    </head>

    <body>

		<!-- Contact Form -->
		<div class="c-form-container section-container section-container-image-bg">
	        <div class="container">

	            <div class="row">
	                <div class="col-sm-8 col-sm-offset-2 c-form section-description wow fadeIn">
	                    <h1><strong>Makrab</strong></h1>
                      <a href=".">Back to Homepage</a>

	                </div>
	            </div>

	            <div class="row">
	            	<div class="col-sm-6 col-sm-offset-3 c-form-box wow fadeInUp">

	                    <div class="c-form-top">
                    		<div class="c-form-top-left">
                    			<h3>Registrasi makrab</h3>
								<p>Isi data sebenar benarnya:</p>
                    		</div>
                    		<div class="c-form-top-right">
                    			<div class="c-form-top-right-icon">
                    				<i class="fa fa-paper-plane"></i>
                    			</div>
                    		</div>
                        </div>
                        <div class="c-form-bottom">
		                    <form role="form" action="" method="post">
		                    	<div class="form-group">
		                    		<label for="c-form-name">
                              <?=form_error('nama'); ?>
                              <span class="label-text">Nama:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="nama" placeholder="Nama lengkap Kalian" class="c-form-name form-control" id="c-form-name">
		                        </div>
		                    	<div class="form-group">
		                    		<label for="c-form-email">
                              <?=form_error('nim'); ?>
		                    			<span class="label-text">Nim:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="nim" placeholder="Nim Kalian" class="c-form-email form-control" id="c-form-email">
		                        </div>
		                        <div class="form-group">
		                        	<label for="c-form-subject">
                                <?=form_error('teman'); ?>
                              <span class="label-text">Teman:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="teman" placeholder="Isi teman satu motor kalian" class="c-form-subject form-control" id="c-form-subject">
		                        </div>

                            <div class="form-group">
                              <label for="c-form-subject">
                              <span class="label-text">Nomer Wali:</span>
                              <?=form_error('wali'); ?>
                              <span class="contact-error"> </span>
                            </label>
                              <input type="text" name="wali" placeholder="Isi dengan nomer wali yang bisa di hubungi" class="c-form-subject form-control" id="c-form-subject">
                            </div>

                            <div class="form-group">
                              <label for="c-form-subject">
                              <span class="label-text">penyakit:</span>
                              <span class="contact-error"></span>
                            </label>
                              <input type="text" name="penyakit" placeholder="Isi jika kalian punya riwayat penyakit" class="c-form-subject form-control" id="c-form-subject">
                            </div>

                            <button type="submit" name="submit"  class="btn">Daftar</button>
		                    </form>
	                    </div>

	                </div>
	            </div>
              <br>

	            <div class="row">
	            	<div class="col-sm-3 c-form-info-box wow fadeInUp">
	            		<div class="c-form-info-box-icon">
	            			<i class="fa fa-map-marker"></i>
	            		</div>
	            		<p>Pantai<br>Gunung Kidul Regency, Special Region of Yogyakarta 55881</p>
	            	</div>
	            	<div class="col-sm-3 c-form-info-box wow fadeInDown">
	            		<div class="c-form-info-box-icon">
	            			<i class="fa fa-phone"></i>
	            		</div>
	            		<p>Phone:<br>085891691405</p>
	            	</div>
	            	<div class="col-sm-3 c-form-info-box wow fadeInUp">
	            		<div class="c-form-info-box-icon">
	            			<i class="fa fa-envelope"></i>
	            		</div>
	            		<p>Email:<br><a href="mailto:support@aisco.cf">support@aisco.cf</a></p>
	            	</div>
	            </div>

	        </div>
        </div>


        <!-- Javascript -->
        <script src="<?=base_url()?>assets/flat/form/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?=base_url()?>assets/flat/form/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/flat/form/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?=base_url()?>assets/flat/form/assets/js/wow.min.js"></script>
        <script src="<?=base_url()?>assets/flat/form/assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="<?=base_url()?>assets/flat/form/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
