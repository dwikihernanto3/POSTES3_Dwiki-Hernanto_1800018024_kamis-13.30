<?php

include_once("koneksi.php"); //Buat koneksi database menggunakan file konfigurasi

$nim = $_GET['nim']; // mengambil data nim dari GET, GET akan menampilkan data/nilai pada URL, kemudian akan ditampung oleh actio
// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim=$nim"); // menghapus data dari tabel mahasiswa berdasarkan nim
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php"); // link untuk pindah halaman ke index.php
