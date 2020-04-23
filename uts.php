<?php

	$file = fopen("data.txt","r+");
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$wilayah = $_POST['wilayah']; 
	$positif = $_POST['positif'];
	$rawat = $_POST['rawat']; 
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];

	fwrite($file, "Data Pemantauan Covid19 wilayah " . $wilayah . "\nper " . date("d-F-Y") . " " . date("H:i:s") . "\n" . $nama . "/" . $nim . "\n\nPositif | Dirawat | Sembuh | Meninggal\n" . $positif . " | " . $rawat . " | " . $sembuh . " | " . $meninggal);  
	
	fclose($file);
 ?>