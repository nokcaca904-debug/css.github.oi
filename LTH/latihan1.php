<?php

for ($i=1;$i<=10;$i++) {
    echo $i . ",";
}; 

echo "<br>";

/* Indexed Array */
$nama = ["Caca","Septia","Wulan"];
echo $nama[0]; 
echo count($nama); /* Menunjukan jumlah data $nama */

echo "<br>";

/* Associative Array */
$nama1 = [
    "nama" => "Caca";
    "kelas" => "XI RPL 1";
];
echo $nama1 ['nama'];

echo "<br>";

/* Multidimensional Array */
$data = [
    ["nama1" => "Caca", "kelas" => "XI RPL 1"];
    ["nama1" => "Septia", "Kelas" => "XI RPL 1"];
];
echo $data[0]['nama1'];

echo "<br>";

function tampilNama($nama2, $alamat) {
    echo "Selamat datang, $nama2 di $alamat" . "<br>";
}
echo tampilnama("Caca","SMKN 1 Maja");
?>