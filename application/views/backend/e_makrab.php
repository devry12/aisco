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
          <th>Nim</th>
          <th>Teman</th>
          <th>Wali</th>
          <th>Penyakit</th>
        </tr>
      </thead>

      <tbody>

        <?php $no = 1; foreach ($isi as $data) {?>
          <tr>
            <tr>
              <th scope="row"><?=$no?></th>
              <td><?=$data->nama?></td>
              <td><?=$data->nim?></td>
              <td><?=$data->teman?></td>
              <td><?=$data->wali?></td>
              <td><?=$data->penyakit?></td>

            </tr>

        <?php  $no++; } ?>

      </tbody>

 </table>
