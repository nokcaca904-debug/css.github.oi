<?php 
 
include "koneksi.php"; 
 
if (isset($_POST['submit'])) { 
 
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $Bidang = $_POST['Bidang']; 
    $alasan_bekerja = $_POST['alasan_bekerja']; 
    $alamat = $_POST['alamat']; 
 
    $query = "INSERT INTO kerja (id, nama, Bidang, alasan_bekerja, alamat) 
              VALUES ('$id', '$nama', '$Bidang', '$alasan_bekerja', '$alamat')"; 
 
    mysqli_query($koneksi, $query); 
 
    header("Location: tampil.php"); 
    exit(); 
} 
 
?> 
 
<!DOCTYPE html> 
<html lang="id"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Kerja</title>
    <link rel="stylesheet" href="chici.css">
</head> 
 
<body> 

    <div class="form-container">

        <div class="header">
            <div class="icon">✦</div>

            <h1>Data Pekerjaan</h1>

            <p>Silakan lengkapi informasi pekerjaan Anda</p>
        </div>

        <form action="" method="POST"> 

            <div class="form-group">
                <label>ID</label>
                <input 
                    type="text" 
                    name="id" 
                    placeholder="Masukkan ID"
                >
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input 
                    type="text" 
                    name="nama" 
                    placeholder="Masukkan nama lengkap"
                >
            </div>

            <div class="form-group">
                <label>Bidang</label>
                <input 
                    type="text" 
                    name="Bidang" 
                    placeholder="Contoh: Programmer"
                >
            </div>

            <div class="form-group">
                <label>Alasan Bekerja</label>
                <textarea 
                    name="alasan_bekerja" 
                    placeholder="Tuliskan alasan bekerja..."
                ></textarea>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input 
                    type="text" 
                    name="alamat" 
                    placeholder="Masukkan alamat"
                >
            </div>

            <button 
                type="submit" 
                name="submit" 
                class="submit-btn">
                Simpan Data
            </button>

        </form>

    </div>
 
</body> 
</html>