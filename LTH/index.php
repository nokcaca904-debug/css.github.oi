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

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Bidang</th>
            <th>Alasan Bekerja</th>
            <th>Alamat</th>
        </tr>
            <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['Bidang']; ?></td>
            <td><?php echo $row['alasan_bekerja']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>