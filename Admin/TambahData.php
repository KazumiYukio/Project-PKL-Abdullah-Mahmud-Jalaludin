<?php

include '../koneksi.php';

$Nama = addslashes($_POST['Nama']);

$Kordinat = addslashes($_POST['Kordinat']);

$Node   = addslashes($_POST['Node']);

$port_1 = addslashes($_POST['port_1']);

$port_2 = addslashes($_POST['port_2']);

$core_1 = addslashes($_POST['core_1']);

$core_2 = addslashes($_POST['core_2']);

$core_3 = addslashes($_POST['core_3']);

$core_4 = addslashes($_POST['core_4']);

$core_5 = addslashes($_POST['core_5']);

$core_6 = addslashes($_POST['core_6']);

$core_7 = addslashes($_POST['core_7']);

$core_8 = addslashes($_POST['core_8']);

$Ket    = addslashes($_POST['Ket']);





mysqli_query($koneksi,"INSERT INTO data_spliter values('',

	'$Nama',

	'$Kordinat',

	'$Node',

	'$port_1',

	'$port_2',

	'$core_1',

	'$core_2',

	'$core_3',

	'$core_4',

	'$core_5',

	'$core_6',

	'$core_7',

	'$core_8',

	'$Ket')");

header('location: mainclass1.php');

?>













