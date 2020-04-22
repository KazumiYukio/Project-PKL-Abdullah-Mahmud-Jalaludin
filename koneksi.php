<?php

$host = 'sql300.epizy.com';

$user = 'epiz_25323853';

$pass = 'Kiranix007';

$db = 'epiz_25323853_spliterV';







$koneksi = mysqli_connect($host,$user,$pass,$db);



if (mysqli_connect_errno()){

	echo "koneksi database gagal : " . mysqli_connect_error();

}





//query

	function query($query){

		global $koneksi;

		$result = mysqli_query($koneksi, $query);

		$rows = [];

		while ( $row = mysqli_fetch_assoc($result) ) {

		$rows[] = $row;

		}



		return $rows;

	}



function cari($keyword){

	$data = "select * from data_spliter where Nama like '%$keyword%' or Node like '%$keyword%' or Kordinat like '%$keyword%'";



	return query($data);

}





?>

