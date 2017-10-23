
		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="<?=base_url()?>assets/aisco/img/hero8.jpg">
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<span class="text-white alt-font">Creation &amp; identity</span>
							<h1 class="text-white">AISCO Gallery</h1>
							<p class="lead text-white">Here is a short description of the AISCO</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>

			<section class="duplicatable-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="feature">
								<h5>Initial Problem&nbsp;</h5>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus
								</p>
							</div>
						</div><!--end 4 col-->

						<div class="col-sm-4">
							<div class="feature">
								<h5>Our Solution</h5>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus
								</p>
							</div>
						</div><!--end 4 col-->

						<div class="col-sm-4">
							<div class="feature">
								<h5>Amazing Result</h5>
								<p>
									Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus
								</p>
							</div>
						</div><!--end 4 col-->
					</div><!--end of row-->
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1>Photos</h1>
							<p class="lead">

							</p>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="image-gallery">


							<?php foreach ($isi as $data): ?>

							<div class="col-sm-4">
								<div class="image-holder" data-scroll-reveal="enter bottom and move 30px">
									<a href="<?=base_url()?>assets/img/<?=$data->url_photo?>"data-lightbox="true" data-title="<?=$data->title?>">
										<div class="background-image-holder">
											<img class="background-image lightbox-image" alt="<?=base_url()?>assets/img/<?=$data->title?>" src="<?=base_url()?>assets/img/<?=$data->url_photo?>">
										</div>
									</a>
								</div>
							</div>
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
