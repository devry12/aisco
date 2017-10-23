
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>List Photos</h3>
  	    <div class="well1 white">
          <a href="<?=base_url()?>admin/addphoto"class="btn btn-primary"><span class="glyphicon glyphicon-plus"> Add Photos</span></a><br>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>TITLE</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($isi as $data): ?>
              <tr>
                <th scope="row"><?=$no?></th>
                <td><?=$data->title?></td>
                <td><img class="d-flex mr-3" width="50px" src="<?=base_url()?>assets/img/<?=$data->url_photo?>" alt="<?=$data->title?>"></td>
                <td><a href="#"class="btn btn-info"><div class="glyphicon glyphicon-pencil"></div></a></td>
                <td><a href="<?=base_url()?>admin/gallery/delete_photos/<?=$data->id_photo?>"class="btn btn-danger"><div class="glyphicon glyphicon-trash"></div></a></td>
              </tr>
            <?php $no++; endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
