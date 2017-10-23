
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>List divisi</h3>
  	    <div class="well1 white">
          <a href="<?=base_url()?>admin/edivisi"class="btn btn-primary"><span class="glyphicon glyphicon-export"> export to excel</span></a><br>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Prodi</th>
                <th>Id line</th>
                <th>Division</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($isi as $data): ?>
              <tr>
                <th scope="row"><?=$no?></th>
                <td><?=$data->name?></td>
                <td><?=$data->prodi?></td>
                <td><?=$data->idline?></td>
                <td><?=$data->division?></td>
                <td><?=$data->reason?></td>

              </tr>
            <?php $no++; endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
