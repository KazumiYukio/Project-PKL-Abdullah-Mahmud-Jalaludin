<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

	 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="background-image: url('../dist/img/us.jpg'); background-size: cover; background-attachment: fixed;">

    <!-- Content Header (Page header) -->



    <!-- Main content -->

    <section class="content container-fluid">

<div class="col-sm-12">





      <!--------------------------

        | Your Page Content Here |

        -------------------------->



		<div class="col-sm-12">

<a href="" button class="btn btn-danger" onclick="self.close()"><strong>Back&nbsp;&nbsp;<div class="fa fa-reply"></div></strong></a>

<br><br>

      <div class="row">

        <div class="col-md-9">

 <div class="box box-info" style="background-color: #ecf0f5">

            <div class="box-header with-border" style="background-color: white">

              <center><h3 class="box-title" style="font-size: 30px"><strong>Edit Data Spliter</strong></h3></center>

            </div>

	<?php

	include '../koneksi.php';

	$id = $_GET['id'];

	$data = mysqli_query($koneksi,"select * from data_spliter where no='$id'");

	while ($d = mysqli_fetch_array($data)){



	?>

	<center>

	<form method="post" action="Update.php">

		<table width="750">

			<tr>

				<td></td>

				<td><input type="hidden" name="no" value ="<?php echo $d['no']; ?>"></td>

			</tr>

			<tr>

				<td align="center" width="150" height="50"><strong>Nama Spliter</strong></td>

				<td><input type="general" name="Nama" size="70" button class="btn"= value ="<?php echo $d['Nama']; ?>" required></td>

			</tr>

			<tr>

			<td align="center" width="150" height="50"><strong>Titik Kordinat</strostrong></td>

				<td><input type="general" name="Kordinat" size="70" button class="btn" value ="<?php echo $d['Kordinat']; ?>"  required></td>

			</tr>

			</tr>

			<td align="center" width="150" height="50"><strong>Node</strostrong></td>

				<td><input type="general" name="Node" size="70" button class="btn" value ="<?php echo $d['Node']; ?>"  required></td>

			</tr>

			<tr>

			<td align="center" width="150" height="50"><strong>Port 1</strong></td>

				<td><input type="general" name="port_1" size="70" button class="btn" value ="<?php echo $d['port_1']; ?>"></td>

			</tr>

			<tr>

			<td align="center" width="150" height="50"><strong>Port 2</strong></td>

				<td><input type="general" name="port_2" size="70" button class="btn" value ="<?php echo $d['port_2']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 1</strong></td>

				<td><input type="general" name="core_1" size="70" button class="btn" value ="<?php echo $d['core_1']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 2</strong></td>

				<td><input type="general" name="core_2" size="70" button class="btn" value ="<?php echo $d['core_2']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 3</strong></td>

				<td><input type="general" name="core_3" size="70" button class="btn" value ="<?php echo $d['core_3']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 4</strong></td>

				<td><input type="general" name="core_4" size="70" button class="btn" value ="<?php echo $d['core_4']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 5</strong></td>

				<td><input type="general" name="core_5" size="70" button class="btn" value ="<?php echo $d['core_5']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 6</strong></td>

				<td><input type="general" name="core_6" size="70" button class="btn" value ="<?php echo $d['core_6']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 7</strong></td>

				<td><input type="general" name="core_7" size="70" button class="btn" value ="<?php echo $d['core_7']; ?>"></td>

			</tr>

			<td align="center" width="150" height="50"><strong>Core 8</strong></td>

				<td><input type="general" name="core_8" size="70" button class="btn" value ="<?php echo $d['core_8']; ?>"></td>

			</tr>

			<tr>

			<td align="center" width="150" height="50"><strong>Keterangan</strong></td>

				<td><input type="general" name="Ket" size="70" button class="btn" value ="<?php echo $d['Ket']; ?>"></td>

			</tr>





		</table>

		</center>

		<br>

		<center>

	<input type="submit" value="Save" button class="btn btn-info" style="margin-left: 50px">

	</center>

	<br>

</form>

</div>

</div>





<?php

}

	?>

 </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

</body>

</html>

