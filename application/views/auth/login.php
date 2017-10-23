<style media="screen">
  .atass{
    margin-top: 100px;
  }
</style>
		<div class="main-container  ">
			<section class="no-pad login-page fullscreen-element">

				<div class="background-image-holder">
					<img class="background-image" alt="Poster Image For Mobiles" src="<?=base_url()?>assets/aisco/img/hero6.jpg">
				</div>

				<div class="container align-vertical atass">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
							<h1 class="text-white ">Login to continue</h1>
							<div class="photo-form-wrapper clearfix">
								<form method="post" action="">
                  <span class="text-white"><?=form_error('nim')?></span>
									<input class="form-email" type="text" name="nim" value="" placeholder="NIM">
                  <span class="text-white"><?=form_error('password')?></span>
									<input class="form-password" type="password" value="" name="password" placeholder="Password">
									<input class="login-btn btn-filled" type="submit" value="Login">
								</form>
							</div><!--end of photo form wrapper-->
							<a href="#" class="text-white">Create an account ➞</a><br>
							<a href="#" class="text-white">I've forgotten my password</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
