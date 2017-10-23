
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
							<p class="lead text-white">This video from AISCO</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>


			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1>video</h1>
							<p class="lead">

							</p>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="image-gallery">


							<?php foreach ($isi as $data): ?>

							<div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="<?=base_url()?>play/<?=$data->id_video?>">
										<span><?=$data->title?></span>
							      <video  src="<?=base_url()?>assets/video/<?=$data->url_video?>" width="300" autoplay muted  poster="posterimage.jpg">
							      </video>
										<span>Created by <?=$data->maker?></span>
							    </a>
							  </div>

							<?php  endforeach; ?>
							</div>





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
