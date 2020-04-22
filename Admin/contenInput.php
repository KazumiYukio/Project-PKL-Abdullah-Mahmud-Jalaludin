<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('../dist/img/jepang.jpg'); background-size: cover; background-attachment: fixed;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content container-fluid">
<div class="col-sm-12">


      <!--------------------------
        | Your Page Content Here |
        -------------------------->
<h4 style="color: white; font-size: 30px"><strong>Add Spliter Data</strong></h4>
      <div class="row">
        <div class="col-md-6">
 <div class="box box-info">
            <div class="box-header with-border">
              <center><h3 class="box-title"><strong>MANUAL</strong></h3></center>
            </div>
<form method="post" action="TambahData.php">
	<table width="600">
		<tr>
			<td height="50" align="center"><strong>Nama Spliter </strong></td>
			<td><input type="text" size="50" name="Nama" required></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Titik Kordinat </strong></td>
			<td><input type="text" size="50" name="Kordinat" required></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Node </strong></td>
			<td><input type="text" size="50" name="Node" required></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Port 1 </strong></td>
			<td><input type="text" size="50" name="port_1"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Port 2 </strong></td>
			<td><input type="text" size="50" name="port_2"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 1 </strong></td>
			<td><input type="text" size="50" name="core_1"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 2 </strong></td>
			<td><input type="text" size="50" name="core_2"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 3 </strong></td>
			<td><input type="text" size="50" name="core_3"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 4 </strong></td>
			<td><input type="text" size="50" name="core_4"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 5 </strong></td>
			<td><input type="text" size="50" name="core_5"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 6 </strong></td>
			<td><input type="text" size="50" name="core_6"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 7 </strong></td>
			<td><input type="text" size="50" name="core_7"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Core 8 </strong></td>
			<td><input type="text" size="50" name="core_8"></td>
		</tr>
		<tr>
			<td height="50" align="center"><strong>Keterangan </strong></td>
			<td><input type="text" size="50" name="Ket"></td>
		</tr>
	</table>
			<center><input button class="btn btn-info"  type="submit" value="SAVE" i class="fa fa-save" onclick="return confirm('Save Data?')"></center>
</form>
<br>
</div>
</div>
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-success">
            <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Input with Ecxel</strong></h3></center>
			</div>
			<br>
			<?php
include '../koneksi.php';
?>

<form method="post" enctype="multipart/form-data" action="proses.php">
	<font style="font-size: 30px">Excel: </font>
	<input type="file" name="berkas_excel" id="exampleInputFile" required>
	<br>
	<center>
	<input name="upload" type="submit" value="Import" class="btn btn-success" onclick="return confirm('Import Excel File Now?')">
	<br><br>
	</center>
</form>
</div>
</div>
            <center><a href="mainclass1.php" button class="btn btn-danger" style="width: 1000px"><strong><div class="fa fa-reply"> Back</div></strong> </a></center>
	<br/>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</body>
</html>
