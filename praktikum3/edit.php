<?php
//Buat koneksi database menggunakan file konfigurasi 
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) { // mengecek dan memeriksa objek dari nilai inputan form.  jika nilai yang dilempar dari suatu form tersebut ada maka akan bernilai true walaupun nilai dari suatu form tersebut tidak terisi atau kosong
	$nim = $_POST['nim']; // mengirimkan nilai variabel nim dengan menggunakan method POST
	$nama = $_POST['nama']; // mengirimkan nilai variabel nama dengan menggunakan method POST
	$jkel = $_POST['jkel']; //  // mengirimkan nilai variabel jkel dengan menggunakan method POST
	$alamat = $_POST['alamat']; // mengirimkan nilai variabel alamat dengan menggunakan method POST
	$tgllhr = $_POST['tgllhr'];  // mengirimkan nilai variabel tgllhr dengan menggunakan method POST
	// update user data
	$result = mysqli_query($con, "UPDATE mahasiswa SET
	nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'"); //update data yang ada di tabel mahasiswa
	// Redirect to homepage to display updated user in list
	header("Location: index.php"); //link untuk pindah halaman ke halaman index.php
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];
// Fetech user data based on id

$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'"); //query untuk mengambil data yang ada pada tabel mahasiswa
while ($user_data = mysqli_fetch_array($result)) { // mengambil dan menangkap data  dari hasil perintah query select * from mahasiswa, yang nantinya hasilnya akan berbantuk array asosiatif dan array numerik
	$nim = $user_data['nim']; //deklarasi variabel yang nantinya akan mengambil data nim 
	$nama = $user_data['nama']; //deklarasi variabel yang nantinya akan mengambil  data nama 
	$jkel = $user_data['jkel']; //deklarasi variabel yang nantinya akan mengambil deklarasi variabel yang nantinya akan mengambil  data jkel 
	$alamat = $user_data['alamat']; //deklarasi variabel yang nantinya akan mengambil  data alamat 
	$tgllhr = $user_data['tgllhr']; //deklarasi variabel yang nantinya akan mengambil  data tgllhr 
}
?>
<html>

<head>
	<title>Edit Data Mahasiswa</title>
</head>
<!-- Form pengisian data untuk edit data -->

<body>
	<a href="index.php">Home</a>
	<br /><br />
	<form name="update_mahasiswa" method="post" action="edit.php">
		<table border="0">
			<!-- php echo $nama  digunakan untuk mengambil data begitu juga dengan variabel yang lain -->
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="jkel" value=<?php echo $jkel; ?>></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td><input type="text" name="tgllhr" value=<?php echo $tgllhr; ?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="nim" value=<?php echo $_GET['nim']; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>

</html>