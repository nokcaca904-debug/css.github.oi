<?php
$nama = isset($_GET['name']) ? trim($_GET['name']) : '';
$kelas = isset($_GET['class']) ? trim($_GET['class']) : '';
$gender = isset($_GET['gender']) ? trim($_GET['gender']) : '';
$nohp = isset($_GET['notelp']) ? trim($_GET['notelp']) : '';
$eskulk = isset($_GET['eskulk']) ? trim($_GET['eskulk']) : '';
$eskulp = isset($_GET['eskulp']) ? $_GET['eskulp'] : [];
$alasan = isset($_GET['alasan']) ? trim(htmlspecialchars($_GET['alasan'])) : '';

$errors = [];

// validasi kelengkapan data
if (empty($nama)){
    $errors[] = "Nama tidak boleh kosong!";
}
if (empty($kelas)){
    $errors[] = "Kelas harap diisi!";
}
if (empty($gender)){
    $errors[] = "Harap masukkan jenis kelamin anda!";
}
if (empty($nohp)){
    $errors[] = "Nomor telepon harus diisi!";
}
if (empty($eskulk)){
    $errors[] = "Ekstrakulikuler kepemimpinan harus diisi!";
}

// validasi format
if (!empty($nama) && !preg_match("/^[a-zA-Z\s]+$/", $nama)){
    $errors[] = "Nama hanya bisa berisi huruf dan spasi!";
}
if (!empty($nohp) && !preg_match("/^08[0-9]{8,11}$/", $nohp)){
    $errors[] = "Format nomor telepon tidak sesuai!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran ekstrakulikuler</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if(!empty($errors)): ?>
        <!-- TAMPILAN JIKA TERJADI ERROR -->
        <div class="error-container">
            <h2>Terjadi error:</h2>
            <ul>
                <?php foreach ($errors as $err): ?>
                    <li><?php echo htmlspecialchars($err, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="index.php">Kembali ke Form</a>
        </div>
    <?php else: ?>
        <?php
            $nama_clean   = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
            $kelas_clean  = htmlspecialchars($kelas, ENT_QUOTES, 'UTF-8');
            $gender_clean = htmlspecialchars($gender, ENT_QUOTES, 'UTF-8');
            $nohp_clean   = htmlspecialchars($nohp, ENT_QUOTES, 'UTF-8');
            $eskulk_clean = htmlspecialchars($eskulk, ENT_QUOTES, 'UTF-8');
            $alasan_clean = htmlspecialchars($alasan, ENT_QUOTES, 'UTF-8');
        ?>
        <div class="hasil-card" id="hasil">
            <h2>Pendaftaran berhasil!</h2>
            <p>Terimakasih <b><?php echo $nama_clean; ?></b>! Karena telah mengikuti ekstrakulikuler di SMKN 1 Maja!</p>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Eskul Kepemimpinan</th>
                    <th>Eskul Pilihan</th>
                    <th>Alasan memilih</th>
                </tr>
                <tr>
                    <td><?php echo $nama_clean; ?></td>
                    <td><?php echo $kelas_clean; ?></td>
                    <td><?php echo $gender_clean; ?></td>
                    <td><?php echo $eskulk_clean; ?></td>
                    <td>
                        <?php 
                            if(!empty($eskulp)){
                                echo htmlspecialchars(implode(", ", $eskulp), ENT_QUOTES, 'UTF-8');
                            } else {
                                echo "-";
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if(!empty($alasan)){
                                echo $alasan_clean;
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
</body>
</html>