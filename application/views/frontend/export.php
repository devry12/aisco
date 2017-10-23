<?php

 header("Content-type: application/vnd-ms-excel");

 header("Content-Disposition: attachment; filename=data.xls");

 header("Pragma: no-cache");

 header("Expires: 0");

 ?>

 <table border="1" width="100%">

      <thead>

        <tr>
    		<th>NO</th>
        <th>Name</th>
        <th>Email</th>
    		<th>Nim</th>
    		<th>school</th>
        <th>Date of birth</th>
        <th>phone number</th>
        <th>Division</th>
    		<th>Ambition</th>
    	</tr>

      </thead>

      <tbody>

        <?php $no = 1; foreach ($isi as $data) {?>
          <tr>
            <th><?=$no?></th>
            <th><?=$data->name;?></th>
            <th><?=$data->email?></th>
            <th><?=$data->nim?></th>
            <th><?=$data->school?></th>
            <th><?=$data->dob?></th>
            <th><?=$data->tlp?></th>
            <th><?=$data->division?></th>
            <th><?=$data->ambition?></th>
          </tr>

        <?php  $no++; } ?>

      </tbody>

 </table>
