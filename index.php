<!DOCTYPE html>
<html>
<body>
	<form action="uts.php" method="post">
		Nama Operator :<br> <input type="text" name="nama" ><br><br>
		Nim			  :<br> <input type="text" name="nim" id="nim"><br><br>
		Nama Wilayah  :<br> <select class="form-control" name="wilayah" id="wilayah">
								<option value="">Pilih Nama Wilayah</option>
								<option value="DKI Jakarta">DKI Jakarta</option>
								<option value="Jawa Barat">Jawa Barat</option>
								<option value="Jawa Tengah">Jawa Tengah</option>
								<option value="Banten">Banten</option>
							</select><br><br>
		Jumlah Positif :<br> <input type="text" name="positif" id="positif"><br><br>
		Jumlah Dirawat :<br> <input type="text" name="rawat" id="rawat"><br><br>
		Jumlah Sembuh :<br> <input type="text" name="sembuh" id="sembuh"><br><br>
		Jumlah Meninggal :<br> <input type="text" name="meninggal" id="meninggal"><br><br>
		<input type="submit">
	</form>

</body>
</html>