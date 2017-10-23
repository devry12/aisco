
<style media="screen">

</style>


        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>List Makrab</h3>
  	    <div class="well1 white">
          <a href="<?=base_url()?>admin/edivisi"class="btn btn-primary"><span class="glyphicon glyphicon-export"> export to excel</span></a><br>
          <table class="table table-responsive" >
            <thead class="thead-default">
              <tr>
                <th>#</th>
                <th>FOTO</th>
                <th>Full Name</th>
                <th>Nim</th>
                <th>Teman</th>
                <th>Wali</th>
                <th width="30px;">Penyakit</th>
                <th >Status</th>
                <th>action</th>
              </tr>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($isi as $data): ?>
              <tr>
                <th scope="row"><?=$no?></th>
                <?php

                $nim = $data->nim;
                $nim = str_replace('.', '_', $nim);

                $tahun = substr($nim,0,2);

                ?>
                <td><img width="60px;" src="http://www.amikom.ac.id/public/fotomhs/20<?=$tahun?>/<?=$nim?>.jpg?>" alt=""></td>
                <td><?=$data->nama?></td>
                <td><?=$data->nim?></td>
                <td><?=$data->wali?></td>
                <td><?=$data->teman?></td>
                <td width ="20%"><?=$data->penyakit?></td>

                <td>
                  <?php echo form_open("admin/makrab/edit_status/$data->idmakrab") ?>

                  <select class="form-control col-xl-12" width = "600px" name="status">
                    <?php if ($data->status == 1){ ?>
                  <option value="<?=$data->status?>">Lunas</option>
                  <option value="0">Belum Lunas</option>
                <?php }else{ ?>
                  <option value="<?=$data->status?>">Belum Lunas</option>
                    <option value="1">Lunas</option>
                </select>
            <?php }
            ?>
              </td>
              <td>
                <input type="submit" class="btn btn-primary" name="submit" value="Edit">
              <?php echo form_close() ?>
              </td>
              </tr>
            <?php $no++; endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
