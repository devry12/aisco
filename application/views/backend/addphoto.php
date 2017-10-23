
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Add photo</h3>
  	    <div class="well1 white">
        <?php echo form_open_multipart('admin/addphoto'); ?>
          <fieldset>
            <div class="form-group">
              <?php echo form_error('title'); ?>
              <label class="control-label">Title</label>
              <?php
              $data = array(
                'name'        => 'title',
                'class'       => 'form-control1',
                'style'       => 'height:30px'
              );

                echo form_input($data)
                ?>
            </div>
            <div class="form-group">
                  <?php
              $data = array(
                      'name'        => 'file',
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
