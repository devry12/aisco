<style>
 video::-internal-media-controls-download-button {
    display:none;
   }

   video::-webkit-media-controls-enclosure {
        overflow:hidden;
   }

   video::-webkit-media-controls-panel {
        width: calc(100% + 30px);
   }
</style>

<!-- slider -->
    <section class="jumbotron animated fadeInUp delay2" id="menu-jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1>AISCO</h1>
					<h2>Amikom International Students Community</h2>
					<p>
Aisco is an amikom-formed organization to develop the talents and interests of international students and also for international students to get to know each other better.</p>

        <h1>Division</h1>
          <div id="DateCountdown" data-date="2017-10-18 12:00:00"  style="width: 100%; height: 125px; padding: 0px; box-sizing: border-box;"></div>
           <a href="division" class="btn btn-primary">Division </a>
				</div>

			</div>
		</div>
    </section>
    <!-- end slider -->



   <!-- Features -->
   <section id="menu-features" class="generic features animated fadeInUp delay3">
      <div class="container">

         <!-- title -->
         <div class="row text-center title">
           <h1>The future is waiting for you</h1>
           <h2>future work that you can achieve</h2>
         </div>
         <!-- end title -->

         <!-- items -->
         <div class="row">

            <div class="col-md-3 text-center item">
               <i class="icon-pencil"></i>
               <h3> Software Engineering</h3>
               <p>A software engineer is a person who applies the principles of software engineering to the design, development, maintenance, testing, and evaluation of the software that make computers or other devices containing software work.</p>
            </div>

            <div class="col-md-3 text-center item">
               <i class="icon-lamp"></i>
               <h3>systems analyst</h3>
               <p> A systems analyst is a person who uses analysis and design techniques to solve business problems using information technology. Systems analysts may serve as change agents who identify the organizational improvements needed, design systems to implement those changes, and train and motivate others to use the systems. </p>
            </div>

            <div class="col-md-3 text-center item">
               <i class="icon-brush"></i>
               <h3>Graphic Designer</h3>
               <p>A graphic designer is a professional within the graphic design and graphic arts industry who assembles together images, typography, or motion graphics to create a piece of design. A graphic designer creates the graphics primarily for published, printed or electronic media, such as brochures (sometimes) and advertising. They are also sometimes responsible for typesetting, illustration, user interfaces, and web design. A core responsibility of the designer's job is to present information in a way that is both accessible and memorable</p>
            </div>

            <div class="col-md-3 text-center item">
               <i class="icon-tools"></i>
               <h3>Systems Management</h3>
               <p> Systems management refers to enterprise-wide administration of distributed systems including (and commonly in practice) computer systems. Systems management is strongly influenced by network management initiatives in telecommunications. </p>
            </div>

         </div>
         <!-- end items -->
		 <div class="row">
			<div class="col-xs-12 vertical_line text-center">
            	<a href="#myModal" class="btn scroll_btn" hidden  data-toggle="modal"></a>
            </div>

        </div>
      </div>
   </section>
   <!-- end Features -->



  <!-- Modal form lightbox -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Contact Us</h4>
        </div>
        <div class="modal-body">
    			<form role="form" id="request" action="request-form.php" method="post" accept-charset="utf-8">
    			  <div class="form-group">
    			    <label class="no">Name</label>
    			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name">
    			  </div>
    			  <div class="form-group">
    			    <label class="no">Email</label>
    			    <input type="text" class="form-control" placeholder="Enter your email" name="email">
    			  </div>
    			  <div class="form-group">
    			    <label class="no">Subject</label>
    			    <input type="text" class="form-control" placeholder="Subject" name="subject">
    			  </div>
    			  <div class="form-group">
    			    <textarea class="form-control" rows="3" placeholder="Add your text here" name="textmessage"></textarea>
    			  </div>
    			  <button type="submit" class="btn btn-default">Submit</button>
    			</form>

        </div>
        <div class="modal-footer"></div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!-- end Modal form lightbox -->



    <!-- Gallery -->
    <section id="menu-gallery" class="generic gallery">
        <div class="container">

            <!-- title -->
           <div class="row text-center title">
             <h1>Image Gallery</h1>
             <h2> All photos aisco.</h2>
           </div>
           <!-- end title -->

            <div class="row cs-style-3">
              <?php foreach ($isi as $data): ?>

              <div class="col-sm-4 gitem">
                <a class="example-image-link" href="<?=base_url()?>assets/img/<?=$data->url_photo?>" data-lightbox="example-set" title="<?=$data->title?>">
                <figure>
                  <img src="<?=base_url()?>assets/img/<?=$data->url_photo?>" alt="img01">
                  <figcaption class="text-center">
                    <h3><?=$data->title?></h3>
                  </figcaption>
                </figure>
                </a>
              </div>
            <?php endforeach; ?>

          </div><!-- end row -->

        </div>
    </section>
    <!-- end Gallery -->


	<!-- Space -->
	<section class="space generic" id="menu-video">
		<div class="container">
		  <div class="row">

		    <div class="col-md-4">
		      <h1>Study Tour To Singapore And Malaysia</h1>
		      <p>travel to study in neighboring country is a routine amikom university yogyakarta</p>
		      <ul>
				<li><a href=""> <i class="glyphicon glyphicon-ok"></i>Victoria Theatre and Concert Hall,Singapore</a> </li>
				<li><a href=""> <i class="glyphicon glyphicon-ok"></i>Visit Merlion,Singapore</a> </li>
				<li><a href=""> <i class="glyphicon glyphicon-ok"></i>Visit Universal,Singapore</a> </li>
				<li><a href=""> <i class="glyphicon glyphicon-ok"></i>Seen Wings Of Time,Sentosa Island</a> </li>
		      </ul>
		    </div>

		    <div class="col-md-8">
          <video id="my-video" class="video-js" controls preload="auto" width="100%" height="20%"
            poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
              <source src="<?=base_url()?>assets/video/Amikom.mp4" type='video/mp4'>
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
                </div>
		    </div>

		  </div>
		</div>
	</section>
	<!-- end Space -->







  	<!--Wall Gallery-->

  	<!-- End Wall Gallery-->


  <script>
     $("#DateCountdown").TimeCircles();
     $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
     $("#PageOpenTimer").TimeCircles();

     var updateTime = function(){
         var date = $("#date").val();
         var time = $("#time").val();
         var datetime = date + ' ' + time + ':00';
         $("#DateCountdown").data('date', datetime).TimeCircles().start();
     }
     $("#date").change(updateTime).keyup(updateTime);
     $("#time").change(updateTime).keyup(updateTime);

     // Start and stop are methods applied on the public TimeCircles instance
     $(".startTimer").click(function() {
         $("#CountDownTimer").TimeCircles().start();
     });
     $(".stopTimer").click(function() {
         $("#CountDownTimer").TimeCircles().stop();
     });

     // Fade in and fade out are examples of how chaining can be done with TimeCircles
     $(".fadeIn").click(function() {
         $("#PageOpenTimer").fadeIn();
     });
     $(".fadeOut").click(function() {
         $("#PageOpenTimer").fadeOut();
     });

$video.on('contextmenu', function(e) {
    e.preventDefault();
});
 </script>
