<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ekstrakulikuler</title>
    <link rel="stylesheet" href="jjp.css">
</head>
<body>
    <div class="stars"></div>
    <div class="form-card">
        <form action="" method="get" id="user-data">
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Masukkan nama Anda" id="name">
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option value=""> Pilih Kelas </option>
                <option value="10 PPLG">10 PPLG 1</option>
                <option value="10 PPLG">10 PPLG 2</option>
                <option value="10 PPLG">10 PPLG 3</option>
                <option value="10 PPLG">10 PPLG 4</option>
                <option value="10 TJKT">10 TJKT 1</option>
                <option value="10 TJKT">10 TJKT 2</option>
                <option value="10 TJKT">10 TJKT 3</option>
                <option value="10 TJKT">10 TJKT 4</option>
                <option value="10 AT">10 AT 1</option>
                <option value="10 AT">10 AT 2</option>
                <option value="10 AT">10 AT 3</option>
                <option value="10 AT">10 AT 4</option>
                <option value="10 TE">10 TE 1</option>
                <option value="10 TE">10 TE 2</option>
                <option value="10 TE">10 TE 3</option>
            </select>

            <p>Gender</p>
            <label><input type="radio" name="gender" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="gender" value="perempuan   ">Perempuan</label>

            <label for="notelp">Nomor Telepon</label>
            <input type="text" name="telp" id="notelp" placeholder="08********">

            <label for="eskulk">Piilih ekstrakulikuler kepemimpinan</label>
            <select name="eskulk" id="eskulk">
                <option value="">Pilih eskul</option>
                <option value="PMR">PMR</option>
                <option value="PKS">PKS</option>
                <option value="PasKibra">PasKibra</option>
                <option value="Pramuka">Pramuka</option>
            </select>
            <p>Pilih ekstrakulikuler pilihan (opsional)</p>
            <label><input type="checkbox" value="Marching Band" name="eskulp">Marching Band</label>
            <label><input type="checkbox" value="Japanese Club" name="eskulp">Japanese Club</label>
            <label><input type="checkbox" value="English Club" name="eskulp">English Club</label>
            <label><input type="checkbox" value="Silat" name="eskulp">Silat</label>
            <label><input type="checkbox" value="Tari" name="eskulp">Tari</label>
            <label><input type="checkbox" value="Pecinta Alam" name="eskulp">Pecinta Alam</label>
            <label><input type="checkbox" value="Badminton" name="eskulp">Badminton</label>
            <label><input type="checkbox" value="Futsal" name="eskulp">Futsal</label>
            <label><input type="checkbox" value="Voli" name="eskulp">Voli</label>
            <label><input type="checkbox" value="Boxing" name="eskulp">Boxing</label>
            <label><input type="checkbox" value="Atletik" name="eskulp">Atletik</label>

        <button type="submit">Kirim!</button>
        </form>
    </div>
</body>
</html>