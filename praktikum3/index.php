<?php
//Buat koneksi database menggunakan file konfigurasi
include_once("koneksi.php"); // menghubungkan database mysql untuk mengambil data dari database mysql
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa "); //query untuk mengambil data yang ada pada tabel mahasiswa
?>
<html>

<head>
    <title>Halaman Utama</title>
</head>

<body>
    <a href="tambah.php">Tambah Data Baru</a><br /><br />
    <table width='80%' border=1>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>tgl lahir</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) { // mengambil dan menangkap data  dari hasil perintah query select * from mahasiswa, yang nantinya hasilnya akan berbantuk array asosiatif dan array numerik
            echo "<tr>";
            echo "<td>" . $user_data['nim'] . "</td>"; //menampilkan data nim dalam bentuk array
            echo "<td>" . $user_data['nama'] . "</td>"; //menampilkan data nama dalam bentuk array
            echo "<td>" . $user_data['jkel'] . "</td>"; //menampilkan data jkel dalam bentuk array
            echo "<td>" . $user_data['alamat'] . "</td>"; //menampilkan data alamat dalam bentuk array
            echo "<td>" . $user_data['tgllhr'] . "</td>"; //menampilkan data tgllhr dalam bentuk array
            echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a 
href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; //link untuk menuju halaman edit, yang dimana data nya di ambil dari primary key nim, jadi sesuai dengan data yang di klik nantinya.
        }
        ?>
    </table>
</body>

</html>