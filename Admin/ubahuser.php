<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['pass'];

//update data kedatabase
mysqli_query($koneksi,"update login set 
	user='$username',
	pass= '$password'
	where id = 1 ");

//mengalihkan halaman kembali ketampil.php
header("location: mainclass1.php");
?>


