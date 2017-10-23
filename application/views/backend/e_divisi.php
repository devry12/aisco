<?php

 header("Content-type: application/vnd-ms-excel");

 header("Content-Disposition: attachment; filename=data.xls");

 header("Pragma: no-cache");

 header("Expires: 0");

 ?>

 <table border="1" width="100%">

      <thead>

        <tr>
          <th>No</th>
          <th>Full Name</th>
          <th>Prodi</th>
          <th>Id line</th>
          <th>Division</th>
          <th>Reason</th>
        </tr>
      </thead>

      <tbody>

        <?php $no = 1; foreach ($isi as $data) {?>
          <tr>
            <tr>
              <th scope="row"><?=$no?></th>
              <td><?=$data->name?></td>
              <td><?=$data->prodi?></td>
              <td><?=$data->idline?></td>
              <td><?=$data->division?></td>
              <td><?=$data->reason?></td>

            </tr>

        <?php  $no++; } ?>

      </tbody>

 </table>
