<?php

include "koneksi.php";

$id = $_GET['id'];

$query = "DELETE FROM kerja WHERE id='$id'";

mysqli_query($koneksi, $query);

header("Location: tampilan.php");
exit;

?>