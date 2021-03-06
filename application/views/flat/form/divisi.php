<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Divisi</title>

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
	                    <h1><strong>Divisi</strong></h1>
                      <a href=".">Back to Homepage</a>

	                </div>
	            </div>


<style media="screen">

</style>

	            <div class="row">
	            	<div class="col-sm-6 col-sm-offset-3 c-form-box wow fadeInUp">

	                    <div class="c-form-top">
                    		<div class="c-form-top-left">
                    			<h3>Pilih Divisi</h3>
								<p>Isi data sebenar benarnya:</p>
                    		</div>
                    		<div class="c-form-top-right">
                    			<div class="c-form-top-right-icon">
                    				<i class="fa fa-paper-plane"></i>
                    			</div>
                    		</div>
                        </div>
                        <div class="c-form-bottom">
		                    <form class="" action="" method="post">
		                    	<div class="form-group">
		                    		<label for="c-form-name">
		                    			<span class="label-text">Nama:</span>
                              <?=form_error('name'); ?>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="name" placeholder="Nama lengkap Kalian" class="c-form-name form-control" id="c-form-name">
		                        </div>
		                    	<div class="form-group">
		                    		<label for="c-form-email">
		                    			<span class="label-text">Prodi:</span>
                              <?= form_error('prodi'); ?>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="prodi" placeholder="Prodi Kalian, contoh'BCIS' " class="c-form-email form-control" id="c-form-email">
		                        </div>
		                        <div class="form-group">
		                        	<label for="c-form-subject">
		                    			<span class="label-text">ID Line:</span>
                              <?= form_error('line'); ?>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="line" placeholder="Isi dengan id line kalian" class="c-form-subject form-control" id="c-form-subject">
		                        </div>

                            <div class="form-group">
                              <label for="c-form-subject">
                              <span class="label-text">Divisi:</span>
                              <?= form_error('divisi'); ?>
                            </label>
                              <select class="c-form-subject form-control" id="c-form-subject" name="divisi">
                                  <option value=" ">============================= Pilih Divisi ==============================</option>
                                  <option value="multimedia">Multimedia</option>
                                  <option value="esport">Esport</option>
                                  <option value="sport">Sport</option>
                              </select>
                            </div>

                            <div class="form-group">
		                        	<label for="c-form-subject">
		                    			<span class="label-text">Reason</span>
                              <?= form_error('reason'); ?>
		                    			<span class="contact-error"></span>
		                    		</label>
                              <textarea name="reason" rows="8" cols="55"></textarea>
		                        </div>


                            <button type="submit" name="submit"  class="btn">Daftar</button>
		                    </form>
	                    </div>

	                </div>
	            </div>
              <br>



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
