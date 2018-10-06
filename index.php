<?php  

$koneksi = mysqli_connect("localhost","root","","mahasiswa");

$errorNma = "";
$errorNim = "";
$errorEmail = "";
$errorTgl = "";
$errorJk = "";
$errorjrs = "";
$errorFkl= "";

if (isset($_POST["kirim"])) {
	
	$nama = $_POST["nama"];

	if ($nama == "") {
		$errorNma = "Nama Tidak Boleh kosong";
	}

	$nim = $_POST["nim"];

	if (!is_numeric($nim)) {
		$errorNim = "NIM harus berupa angka";
	}
	$email = $_POST["email"];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errorEmail = "Format email salah";
	}
	$tgl_lahir = $_POST["tl"];
	if ($tgl_lahir == "") {
		$errorTgl = "Tanggal Lahir Harus Diisi";
	}
	$jenis_kelamin = $_POST["jenis_kelamin"];
	if ($jenis_kelamin == "") {
		$errorJk = "Jenis Kelamin Tidak Boleh Kosong";
	}
	$jurusan = $_POST["jurusan"];
	if ($jurusan == "") {
		$errorjrs = "Jurusan tidak boleh kosong";
	}
	$fakultas = $_POST["fakultas"];
	if ($fakultas == "") {
		$errorFkl = "Fakultas Tidak Boleh Kosong";
	}


	if ($errorNma === "" && $errorNim === "" && $errorEmail === "" && $errorTgl === "" && $errorJk ==="" && $errorjrs === "" && $errorFkl === "" ) {
		$query =  ("INSERT INTO mhs VALUES('','$nama', '$nim','$email','$tgl_lahir','$jenis_kelamin','$jurusan','$fakultas')");

	$simpan = mysqli_query($koneksi, $query);

	if ($simpan) {
		echo "<script>
			alert('Data Berhasil Disimpan');
		</script>";
	}

	
	} 

	
}

$hasil = mysqli_query($koneksi, "SELECT * FROM mhs");



?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>



<body>



	<table>
		<form method="post" >
			<tr>
				<div style="color:red"><?php echo $errorNma; ?></div>
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorNim; ?></div>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorEmail; ?></div>
				<td>Email : </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorTgl; ?></div>
				<td>Tanggal Lahir : </td>
				<td><input type="date" name="tl"></td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorJk; ?></div>
				<td>Jenis Kelamin : </td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki Laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorjrs; ?></div>
				<td>Program Studi</td>
				<td>
					<select name="jurusan">
						<option></option>
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Manajemen Informatika">Manajemen Informatika</option>
						<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
						<option value="Teknik Komputer">Teknik Komputer</option>
					</select>
				</td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorFkl; ?></div>
				<td>FAKULTAS</td>
				<td>
					<select name="fakultas">
						<option></option>
						<option value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</option>
						<option value="FAKULTAS INFORMATIKA">FAKULTAS INFORMATIKA</option>
						<option value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</option>
						<option value="FAKULTAS REKAYASA INDUSTRI">FAKULTAS REKAYASA INDUSTRI</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
			</tr>
			
		</form>
	</table><br><br>


	
		<table border="1" cellspacing="0" cellpadding="1" ">
  <thead>
    <tr align="center">
      <th>NOMOR</th>
      <th width="300">NAMA</th>
      <th width="200">NOMOR INDUK MAHASISWA</th>
      <th width="400">EMAIL</th>
      <th width="200">TANGGAL LAHIR</th>
      <th width="200">JENIS KELAMIN</th>
      <th width="200">PROGRAM STUDI</th>
      <th width="200">FAKULTAS</th>
    </tr>
  </thead>
  <tbody>
  	<?php while ($row = mysqli_fetch_assoc($hasil)) : ?>
    <tr align="center">
      <td><?= $row["id"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["tgl_lahir"]; ?></td>
      <td><?= $row["jenis_kelamin"]; ?></td>
      <td><?= $row["Prg_study"]; ?></td>
      <td><?= $row["fakultas"]; ?></td>
    </tr>

<?php endwhile; ?>

   
  </tbody>


	
</table>
</body>
</html>


