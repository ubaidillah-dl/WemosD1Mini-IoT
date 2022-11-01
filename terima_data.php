<?php
	// Koneksi ke database
	$konek = mysqli_connect("localhost","root","","sensor");

	// Baca data yang dikirim Esp8266
	$nilai = $_GET["Intensitas"];

	// Update data tabel
	mysqli_query($konek, "UPDATE sensor_gas SET Intensitas='$nilai'")
?>