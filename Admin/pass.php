<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//update data kedatabase
mysqli_query($koneksi,"update admin set 
	username='$username',
	password= '$password'
	where id = 3 ");

//mengalihkan halaman kembali ketampil.php
header("location: mainclass1.php");
?>


