<?php
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from data_spliter where no='$id'");

header("location:mainclass1.php");
?>