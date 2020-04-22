<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Spliter.xls");
	?>
	<table border="1">
		<tr>
			<th><center>No</center></center></th>
			<th><center>Nama</center></th>
			<th><center>Kordinat</center></th>
			<th><center>Node</center></th>
			<th><center>Input 1</center></th>
			<th><center>Input 2</center></th>
			<th><center>Output 1</center></th>
			<th><center>Output 2</center></th>
			<th><center>Output 3</center></th>
			<th><center>Output 4</center></th>
			<th><center>Output 5</center></th>
			<th><center>Output 6</center></th>
			<th><center>Output 7</center></th>
			<th><center>Output 8</center></th>
			<th><center>keterangan</center></th>

		</tr>
		<?php 
		include 'koneksi.php';
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from data_spliter");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><center><?php echo $no++; ?></center></td>
			<td><?php echo $d['Nama']; ?></td>
			<td><?php echo $d['Kordinat']; ?></td>
			<td><?php echo $d['Node']; ?></td>
			<td><?php echo $d['port_1']; ?></td>
			<td><?php echo $d['port_2']; ?></td>
			<td><?php echo $d['core_1']; ?></td>
			<td><?php echo $d['core_2']; ?></td>
			<td><?php echo $d['core_3']; ?></td>
			<td><?php echo $d['core_4']; ?></td>
			<td><?php echo $d['core_5']; ?></td>
			<td><?php echo $d['core_6']; ?></td>
			<td><?php echo $d['core_7']; ?></td>
			<td><?php echo $d['core_8']; ?></td>
			<td><?php echo $d['Ket']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>