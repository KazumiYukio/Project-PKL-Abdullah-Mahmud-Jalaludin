<?php

include '../koneksi.php';



$data = mysqli_query($koneksi,"select * from login,admin");



foreach ($data as $f) {

}

?>

<!DOCTYPE html>

<html>

<head>

	<title></title>
	<script type="text/javascript" src="../jquery.js"></script>

</head>

<body>

	 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="background-image: url('../dist/img/bg.jpg'); background-size: cover; background-attachment: fixed;">

    <!-- Content Header (Page header) -->



    <!-- Main content -->

    <section class="content container-fluid">

<div class="col-sm-12">





      <!--------------------------

        | Your Page Content Here |

        -------------------------->

<h4 style="color: white; font-size: 30px"><strong>Change Account</strong></h4>

      <div class="row">

        <div class="col-md-6">

 <div class="box box-info">

            <div class="box-header with-border">

              <center><h3 class="box-title"><strong>Change Admin Account</strong></h3></center>

            </div>

<form method="post" action="pass.php">

	<table width="600">

		<tr>

				<td></td>

				<td><input type="hidden" name="no" value ="<?php echo $d['id']; ?>"></td>

			</tr>

		<tr>

			<td height="50" align="center"><strong>Username </strong></td>

			<td><input type="text" size="50" name="username" autocomplete="off" value="<?php echo $f['username'] ?>" required></td>

		</tr>

		<tr>

			<td height="50" align="center"><strong>Password </strong></td>

			<td><input type="password" class="form-password" size="50" name="password" autocomplete="off" value="<?php echo $f['password'] ?>" required></td>

		</tr>

		<tr>

			<td></td>

			<td><input type="checkbox" class="form-checkbox">  See Password</td>

		</tr>

	</table>

			<center><input button class="btn btn-info" onclick="return confirm('Yakin Ubah Akun')" type="submit" value="Save" i class="fa fa-save" ></center>

</form>

<br>

</div>

</div>

        <div class="col-md-6">

          <!-- Horizontal Form -->

          <div class="box box-success">

            <div class="box-header with-border">

              <center><h3 class="box-title"><strong>Change User Accont</strong></h3></center>

			</div>

<form method="post" action="ubahuser.php">

	<table width="600">

		<tr>

			<td height="50" align="center"><strong>Username </strong></td>

			<td><input type="text" size="50" name="user" autocomplete="off" value="<?php echo $f['user'] ?>" required></td>

		</tr>

		<tr>

			<td height="50" align="center"><strong>Password </strong></td>

			<td><input type="password" class="form-password2" size="50" name="pass" autocomplete="off" value="<?php echo $f['pass'] ?>"required></td>

		</tr>

		<tr>

			<td></td>

			<td><input type="checkbox" class="form-checkbox2">  See Password</td>

		</tr>

	</table>

			<center><input button class="btn btn-info" name="simpan" onclick="return confirm('Change Account now?')" type="submit" value="Save" i class="fa fa-save" ></center>

			<br>

</form>



</div>

</div>

            <center><a href="mainclass1.php" button class="btn btn-danger" style="width: 1000px"><strong><div class="fa fa-reply"> Back</div></strong> </a></center>

	<br/>

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->





<script type="text/javascript">

	$(document).ready(function(){

		$('.form-checkbox').click(function(){

			if($(this).is(':checked')){

				$('.form-password').attr('type','text');

			}else{

				$('.form-password').attr('type','password');

			}

		});

	});

</script>



<script type="text/javascript">

	$(document).ready(function(){

		$('.form-checkbox2').click(function(){

			if($(this).is(':checked')){

				$('.form-password2').attr('type','text');

			}else{

				$('.form-password2').attr('type','password');

			}

		});

	});

</script>



</body>

</html>

