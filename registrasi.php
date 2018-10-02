<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<table>
		<form action="prosesregis.php" method="post" enctype="multipart/form-data">
		<tr>
			<td>Nama &nbsp &nbsp &nbsp
			<input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title="maksimal 25 karakter dan tidak mengandung angka" required>
			</td>
		</tr>
		<tr>
			<td>Nim &nbsp &nbsp &nbsp &nbsp
			<input type="text" name="nim" pattern="[0-9]{10}" title="harus angka 10 karakter" required>
			</td>
		</tr>
		<tr>
			<td>Email &nbsp &nbsp &nbsp
			<input type="text" name="email" placeholder="@gmail.com" required><br>
			<input type="submit" name="submit" value="submit">
			</td>
		</tr>
		<tr>
			<td>jenis kelamin 
				<input type="radio" name="jk" value="laki-laki">laki-laki
				<input type="radio" name="jk" value="perempuan">perempuan
			</td>
		</tr>
		<tr>
			<td>program studi 
				<select name="prodi">
					<option value="Manajemen informatika">Manajemen informatika</option>
					<option value="Sistem informasi">Sistem informasi</option>
					<option value="teknik informatika">teknik informatika</option>
					<option value="ilmu komunikasi">ilmu komunikasi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>fakultas
				<select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FRI">FRI</option>
					<option value="FEB">FEB</option>
				</select>
			</td>
		</tr>
		<tr>

				<td>

					<label>HOBBY :</label>
				</td>
				<td>
					<input type="checkbox" name="hobby[]" value="Main bola">Main bola
					<input type="checkbox" name="hobby[]" value="Futsal">Futsal
					<input type="checkbox" name="hobby[]" value="Badminton">Badminton
					<input type="checkbox" name="hobby[]" value="Tenis">Tenis
				</td>
			</tr>
			<tr>
				<td>
					<label>Upload Foto :</label>
				</td>
				<td>
					<input type="file" name="foto">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>
