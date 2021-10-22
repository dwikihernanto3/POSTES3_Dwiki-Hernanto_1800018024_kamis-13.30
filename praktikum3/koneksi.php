<?php
$host = "localhost"; // Deklarasi nama host localhost
$username = "root"; // Deklarasi  username  mysql dengan nama root
$password = ""; // Deklarasi password mysql database, akan tetapi di karenakan xampp saya tidak menggunakan password maka tidak di deklarasikan
$databasename = "db_akademik"; //deklarasi nama database yang ada pada server xampp dan yang ingin di gunakan
$con = @mysqli_connect($host, $username, $password, $databasename); //Membuat koneksi ke database mysql

//Mengecek nilai variabel koneksi dan mengecek error koneksi apakah koneksi berhasil atau tidak.
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
