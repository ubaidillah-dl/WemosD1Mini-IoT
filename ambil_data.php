<?php 
	// Koneksi ke database
	$konek = mysqli_connect("localhost","root","","sensor");

	// Baca isi tabel database
	$sql = mysqli_query($konek, "SELECT * from sensor_gas");
	$data = mysqli_fetch_array($sql);
	$nilai = $data["Intensitas"];

	// Tampilkan isi tabel
	echo $nilai;
 ?>