
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>List </h3>
  	    <div class="well1 white">
          <a href="<?=base_url()?>admin/export"class="btn btn-primary"><span class="glyphicon glyphicon-export"> export to excel</span></a><br>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>prodi</th>
                <th>division</th>
                <th>reason</th>
                <th>School</th>
                <th>Date of birth</th>
                <th>Division</th>
                <th>Ambition</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($isi as $data): ?>
              <tr>
                <th scope="row"><?=$no?></th>
                <td><?=$data->name?></td>
                <td><?=$data->nim?></td>
                <td><?=$data->email?></td>
                <td><?=$data->tlp?></td>
                <td><?=$data->school?></td>
                <td><?=$data->dob?></td>
                <td><?=$data->division?></td>
                <td><?=$data->ambition?></td>
              </tr>
            <?php $no++; endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
