<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Status</title>

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
	                    <h1><strong>Status</strong></h1>
                      <a href=".">Back to Homepage</a>

	                </div>
	            </div>


<style media="screen">

</style>

<table class="table table-responsive" >
  <thead class="thead-default">
    <tr>
      <td>#</td>
      <td>FOTO</td>
      <td>Full Name</td>
      <td>Nim</td>
      <td >Status</td>
    </tr>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach ($isi as $data): ?>
    <tr>
      <td scope="row"><?=$no?></td>
      <?php

      $nim = $data->nim;
      $nim = str_replace('.', '_', $nim);

      $tahun = substr($nim,0,2);


      $post = [
          'nim' => $data->nim,
          'cek' => 'Cek Status >>',
      ];

      $ch = curl_init('http://www.amikom.ac.id/index.php/status/');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

      // execute!
      $response = curl_exec($ch);

      // close the connection, release resources used
      curl_close($ch);

      // do anything you want with your response
      $chtml = htmlspecialchars($response);

      $ex = explode('<div class="nama">',$response);
      $ex2 = explode('</div>',$ex[1]);




      ?>
      <td><img width="60px;" src="http://www.amikom.ac.id/public/fotomhs/20<?=$tahun?>/<?=$nim?>.jpg?>" alt=""></td>
      <td><?=$ex2[0];?></td>
      <td><?=$data->nim?></td>
      <td>
        <?php if ($data->status == 1){ ?>
          <h4>Sudah Lunas</h4>
    <?php }else{ ?>
      <h4>Belum Lunas</h4>
<?php }?>
    </td>
    </tr>
  <?php $no++; endforeach; ?>
  </tbody>
</table>

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
