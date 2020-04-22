<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

	 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="background-image: url(../dist/img/cina.jpg); background-size: cover;

  background-attachment: fixed;">

    <!-- Content Header (Page header) -->



    <!-- Main content -->

    <section class="content container-fluid">

<div class="col-sm-12">





      <!--------------------------

        | Your Page Content Here |

        -------------------------->

<div class="col-sm-12">

    <h2 style="color: white"><strong>Data Spliter Lintasarta</strong></h2>

<br>

<form action="" method="post">

  <input type="text" style="height: 32px; width: 315px" name="keyword"size="40" placeholder=" Enter Keyword" autocomplete="off" autofocus>

  <button type="submit" name="cari" class="btn btn-info"><div class="fa fa-search"></div></button>

</form>

<br>

  <a href="mainclass3.php" button class="btn btn-primary"><i class="fa fa-plus-square"> Add Data</i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <a href="Delete.php" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete All Data?')"><i class="fa fa-exclamation-triangle"> Delete All Data</i></a>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <a href="http://bit.ly/38IyQ88" class="btn btn-warning" onclick="return confirm('Export Data Now?')"><i class="fa fa-print"> Export</i></a>

<br><br><br>

<table class="table">

  <thead>

  <head>

    <tr style="background-color: white">

      <th>No</th>

      <th>Nama</th>

      <th>Lokasi Kordinat</th>

      <th>Node</th>



      <th colspan="2"><center>Keterangan</center></th>

    </tr>

  </thead>

  </head>

<?php



  include '../koneksi.php';





  $no = 1;

  $data = mysqLi_query($koneksi,"select * from data_spliter");



  if (isset($_POST['cari'])) {

  $data = cari(addslashes($_POST['keyword']));

}



foreach ($data as $d )

  {

    ?>  <tr style="background-color: lightskyblue">

    <td><?php echo $no++; ?></td>

    <td><?php echo $d['Nama']; ?></td>

    <td><?php echo $d['Kordinat']; ?></td>

    <td><?php echo $d['Node']; ?></td>



    <td align="right"><a style="width: 81px" target="_Blank" href="mainclass2.php?id=<?php echo $d['no']; ?>" button class="btn btn-warning" ><i class="fa fa-edit "> Edit </i></a>

    <td align="left"><a href="hapusdata.php?id=<?php echo $d['no']; ?>" button onclick="return confirm('Delete This Data?')" class="btn btn-danger"><i class="fa fa-eraser"> Delete </i></a></td>

    </td>

  </tr>

  <?php

}

?>

</table>

</div>

<td>



    </section>

    <!-- /.content -->

  </div>



</body>

</html>

