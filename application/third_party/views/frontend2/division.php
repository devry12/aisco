
<style media="screen">
  .area{
    margin-top: 20px;
  }
  .register{
    margin-bottom: 30px;
  }
  .jarakform{
    margin-left: 28%;
  }
</style>

    <!-- slider -->
    <section class="jumbotron animated fadeInUp delay2" id="menu-jumbotron">
		<div class="container ">
			<div class="row ">
				<div class="col-md-6 jarakform">
					<h1>AISCO FirstMeet</h1>
					<h2>Amikom International Students Community</h2>
					<p>Here's your chance to gain more knowledge and get to know friends from other majors</p>
        <form  class="suscribe" action="" method="post" accept-charset="utf-8">
                      <div class="col-sm-11">
                      <?=form_error('name') ?>
        							<input type="text" class="form-control" placeholder="Full Name" name="name">
                      <?=form_error('prodi') ?>
                      <input type="text" class="form-control" placeholder="prodi" name="prodi">
                      <?=form_error('idline') ?>
                      <input type="text" class="form-control" placeholder="ID line" name="idline">

                    <select class="form-control select" name="division">
                      <option value="---">=============== Choose the division you like =================</option>
                        <option value="multimedia">Multimedia</option>
                        <option value="esport">Esport</option>
                        <option value="sport">Sport</option>
                      </select>

                      <textarea name="reason" class="form-control area" placeholder="Reason" rows="2" cols="6"></textarea>
                    </div>
        						<div class="text-center">
                      <button type="submit" class="btn text-center register">Register</button>
        							<a href="<?=base_url()?>" class="btn text-center register">Back To Home</a>
        						</div>
        					</form>
			</div>
		</div>
    </section>
