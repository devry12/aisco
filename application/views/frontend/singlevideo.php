
		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="<?=base_url()?>assets/aisco/img/hero8.jpg">
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<span class="text-white alt-font">Creation &amp; identity</span>
							<h1 class="text-white">AISCO Video</h1>
							<p class="lead text-white">This video from  AISCO</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>


			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<?php foreach ($isi as $data): ?>
							<h1><?=$data->title?></h1>
						<?php endforeach; ?>
							<p class="lead">

							</p>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="image-gallery">
								<style media="screen">
									.jarak{
										margin-left:200px;
									}
								</style>

									<?php foreach ($isi as $data): ?>

											<video id="my-video" class="video-js jarak" controls preload="auto" width="840" height="464"
	  									poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
	    								<source src="<?=base_url()?>assets/video/<?=$data->url_video?>" type='video/mp4'>
	  									</video>
										<?php endforeach; ?>






						</div>

					</div><!--end of row-->


				</div><!--end of container-->
			</section>

			<section class="bg-primary">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="testimonials-slider text-center">
								<ul class="slides">

								</ul>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
