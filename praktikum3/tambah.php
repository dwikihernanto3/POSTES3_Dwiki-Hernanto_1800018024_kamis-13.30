<html>

<head>
	<title>Tambah data mahasiswa</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br /><br />
	<!-- Form Inputan untuk memasukan data tabel -->
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Gender (L/P)</td>
				<td><input type="text" name="jkel"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td><input type="text" name="tgllhr"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<?php
	// Check If form submitted, insert form data into users table.
	if (isset($_POST['Submit'])) {
		$nim = $_POST['nim']; //deklarasi variabel yang nantinya akan mengambil data nim 
		$nama = $_POST['nama']; //deklarasi variabel yang nantinya akan mengambil  data nama
		$jkel = $_POST['jkel']; //deklarasi variabel yang nantinya akan mengambil deklarasi variabel yang nantinya akan mengambil  data jkel 
		$alamat = $_POST['alamat'];  //deklarasi variabel yang nantinya akan mengambil  data alamat 
		$tgllhr = $_POST['tgllhr']; //deklarasi variabel yang nantinya akan mengambil  data tgllhr 
		// memasukan koneksi database file
		include_once("koneksi.php");
		// Query table memasukan data kedalam tabel
		$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr)
		VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");
		// menampilkan pesan ketika pengguna telah berhasil menambahkan data
		echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
	}
	?>
</body>

</html>