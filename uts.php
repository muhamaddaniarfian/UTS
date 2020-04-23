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
	echo "Data Pemantauan Covid19 wilayah " . $wilayah ;
	echo "<br>";
	echo "per " . date("d-F-Y") . " " . date("H:i:s");
	echo "<br>";
	echo  $nama . "/" . $nim ;
	echo "<br>";
	echo "<br>";
	echo "<table width = 500 border =1>
				<tr>
				<td>Positif</td>
				<td>Dirawat</td>
				<td>Sembuh</td>
				<td>Meninggal</td>
				</tr>
				<tr>
				<td>" . $positif . "</td>
				<td>" . $rawat . "</td>
				<td>" . $sembuh . "</td>
				<td>" . $meninggal . "</td>
				</tr>
				</table>";
 ?>
