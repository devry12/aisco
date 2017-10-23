
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Add Video</h3>
  	    <div class="well1 white">
        <?php echo form_open_multipart('admin/addvideo'); ?>
          <fieldset>
            <div class="form-group">
              <?php echo form_error('title'); ?>
              <label class="control-label">Title</label>
              <?php
              $datas = array(
                'name'        => 'titles',
                'class'       => 'form-control1',
                'style'       => 'height:30px'
              );

                echo form_input($datas)
                ?>

                <?php echo form_error('makers'); ?>
                <label class="control-label">Maker</label>
                <?php
                $data = array(
                  'name'        => 'makers',
                  'class'       => 'form-control1',
                  'style'       => 'height:30px'
                );

                  echo form_input($data)
                  ?>
            </div>
            <div class="form-group">
                  <?php
              $data = array(
                      'name'        => 'video',
                      'class'       => 'form-control-file',
                      'style'       => 'height:30px'
                      );
                      echo $error;
                echo form_upload($data)
                              ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
          <?php echo form_close(); ?>
         </div>
    </div>
