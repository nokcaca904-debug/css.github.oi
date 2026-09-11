<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "krj"; 

$koneksi = mysqli_connect($hostname,$username,$password,$dbname);

if (!$koneksi) {
    die("koneksi gagal: ".mysqli_connect_error());
} 
$query = "SELECT * FROM kerja";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_all($hasil, MYSQLI_ASSOC);
?>