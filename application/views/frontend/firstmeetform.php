
		<div class="main-container">
		<section class="contact-photo">

				<div class="background-image-holder">
					<img class="background-image" alt="Background Image" src="<?=base_url()?>assets/aisco/img/hero4.jpg">
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1 class="text-white">Registration For First Meet<br>
							Let's join and play together
							</h1>
						</div>
					</div><!--end of row-->

					<div class="photo-form-wrapper clearfix">
						<?php echo form_open(); ?>
							<div class="row">
								<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
                  <span class="text-white"><?=form_error('name') ?></span>
                  <input  type="text" placeholder="Your Name" name="name">
                  <span class="text-white"><?=form_error('nim') ?></span>
                  <input  type="text" placeholder="Your Nim" name="nim">
                  <span class="text-white"><?=form_error('school') ?></span>
									<input  type="text" placeholder="Which school are you from" name="school">
								</div>

								<style media="screen">
									select{
										padding-left: 20px;
										padding-right: 20px;
										font-family:  "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
										width: 570px;
										height: 58px;
										background-color: #dfe1e1;
										margin-bottom: 20px;
										border-radius: 50px;
									}


								</style>

								<div class="col-md-3 col-sm-4">

                  <span class="text-white"><?=form_error('email') ?></span>
                  <input  type="text" placeholder="Your Email" name="email">
                  <span class="text-white"><?=form_error('tlp') ?></span>
									<input  type="text" placeholder="Your Phone number" name="tlp">
                  <span class="text-white"><?=form_error('dob') ?></span>
									<input  type="date" class="form-control1" placeholder="Date of birth"  name="dob">
								</div>
							</div><!--end of row-->

							<div class="row">
								<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
									<span class="text-white"><?=form_error('dream') ?></span>
									<select class="devisi" name="division">
										<option value="" hidden>============ Choose the division you want ========</option>
										<option value="BrainMaster">BrainMaster</option>
										<option value="Esport">Esport</option>
										<option value="Sport">Sport</option>
										<option value="Animasi">Animasi</option>
										<option value="Video Art">Video Art</option>
									</select>
									<span class="text-white"><?=form_error('dream') ?></span>
									<input  type="text" name="ambition" placeholder="Your Ambition">
									<input type="submit" class="send-form btn-filled" value="Send">
							</div><!--end of row-->
						<?php echo form_close(); ?>
