<?php
include "koneksi.php";

$id = $_GET['id'];

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $bidang = $_POST['Bidang'];
    $alasan_bekerja = $_POST['alasan_bekerja'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE kerja SET 
                nama = '$nama',
                Bidang = '$bidang',
                alasan_bekerja = '$alasan_bekerja',
                alamat = '$alamat'
              WHERE id = '$id'";

    mysqli_query($koneksi, $query);

    header("Location: tampilan.php");
    exit;
}

$query_lama = "SELECT * FROM kerja WHERE id = '$id'";
$hasil_lama = mysqli_query($koneksi, $query_lama);

$data = mysqli_fetch_assoc($hasil_lama);
?>

<form action="" method="POST">

    <input type="text" name="nama" value="<?php echo $data['nama']; ?>">

    <input type="text" name="Bidang" value="<?php echo $data['Bidang']; ?>">

    <input type="text" name="alasan_bekerja" value="<?php echo $data['alasan_bekerja']; ?>">

    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>">

    <button type="submit" name="submit">UPDATE</button>

</form>