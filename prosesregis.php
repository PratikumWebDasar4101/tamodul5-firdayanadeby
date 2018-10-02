<?php
session_start();
if (!isset($_SESSION['data_mhs'])) {
	$data_mhs= array();
}else{
	$data_mhs =$_SESSION['data_mhs'];
}
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	$jk = $_POST['jk'];
	$fakultas = $_POST['fakultas'];
	$prodi = $_POST['prodi'];
	$file = $_FILES['foto'];
	$file_name =$file['name'];
	$tmp_name =$file['tmp_name'];
	$file_move_success = move_uploaded_file($tmp_name, 'terupload/'.$file_name);
	$hobby = $_POST['hobby'];

	$data_mhs_baru = array(
			'nama' => $nama,
			'nim' => $nim,
			'email' => $email,
			'jk'=> $jk,
			'fakultas'=> $fakultas,
			'prodi'=> $prodi,
			'hobby'=> $hobby,
			'foto'=> 'terupload/'.$file_name
			);
	array_push($data_mhs, $data_mhs_baru);
	$_SESSION['data_mhs']= $data_mhs;
}
?>
<table border="1">
	<tr>
	<th>NIM</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Jenis Kelamin</th>
	<th>Fakultas</th>
	<th>Program Studi</th>
	<th>Hobby</th>
	<th>Foto</th>
	</tr>
	<?php
	$data_mhs = $_SESSION['data_mhs'];
	$i = 0;
	while ($i < count($data_mhs)) {
	$hobby = implode(",", $data_mhs[$i]['hobby']);
	?>
	<tr>
		<td><?php echo $data_mhs[$i]['nim']; ?></td>
		<td><?php echo $data_mhs[$i]['nama']; ?></td>
		<td><?php echo $data_mhs[$i]['email']; ?></td>
		<td><?php echo $data_mhs[$i]['jk']; ?></td>
		<td><?php echo $data_mhs[$i]['fakultas']; ?></td>
		<td><?php echo $data_mhs[$i]['prodi']; ?></td>
		<td><?php echo $hobby; ?></td>
		<td><img src="<?php echo $data_mhs[$i]['foto']; ?>" width="200"></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
