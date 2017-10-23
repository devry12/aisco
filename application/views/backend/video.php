
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>List Video</h3>
  	    <div class="well1 white">
          <a href="<?=base_url()?>admin/addvideo"class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Add Video</span></a><br>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>TITLE</th>
                <th>Maker</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($isi as $data): ?>
              <tr>
                <th scope="row"><?=$no?></th>
                <td><?=$data->title?></td>
                <td><?=$data->maker?></td>
                <td><a href="#"class="btn btn-info"><div class="glyphicon glyphicon-pencil"></div></a></td>
                <td><a href="<?=base_url()?>admin/gallery/delete_video/<?=$data->id_video?>"class="btn btn-danger"><div class="glyphicon glyphicon-trash"></div></a></td>
              </tr>
            <?php $no++; endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
