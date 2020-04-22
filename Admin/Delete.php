<?php

include '../koneksi.php';



mysqli_query($koneksi,"delete from data_spliter");
mysql_query($koneksi,"alter table data_spliter auto_increment=0");



header('location: mainclass1.php');

?>