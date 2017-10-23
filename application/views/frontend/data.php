
<br>
<br><br><br><br>
<div class="container">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Data Pendaftaran</div>
  </div>
  <!-- Table -->
  <a href="export" class="btn btn-primary">Export to excel</a>
  <table class="table">
    <tr>
		<th>NO</th>
    <th>Name</th>
    <th>Email</th>
		<th>Nim</th>
		<th>school</th>
    <th>Date of birth</th>
    <th>phone number</th>
		<th>Dream</th>
	</tr>

<?php $no = 1; foreach ($isi as $data) {?>
  <tr>
    <th><?=$no?></th>
    <th><?=$data->name;?></th>
    <th><?=$data->email?></th>
    <th><?=$data->nim?></th>
    <th><?=$data->school?></th>
    <th><?=$data->dob?></th>
    <th><?=$data->tlp?></th>
    <th><?=$data->dream?></th>
  </tr>

<?php  $no++; } ?>
  </table>
</div>
</div>
