<?php
function luasbalok($panjang, $lebar, $tinggi) {
    return 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
}
$hasil = luasbalok(14, 20, 12);
echo "hasil luas balok =" . $hasil;
?>