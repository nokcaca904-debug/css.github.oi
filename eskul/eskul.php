<?php
    $nama = isset($_POST['name']) ? trim($_POST['name']) : '';
    $kelas = isset($_POST['class']) ? trim($_POST['class']) : '';
    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
    $telp = isset($_POST['notelp']) ? trim($_POST['notelp']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan eskul</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-card">
        <h2>Pilih Ekstrakulikulermu!</h2>
        <form action="process.php" method="get" id="user-choice">
            
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($nama) ?>">
            <input type="hidden" name="class" value="<?php echo htmlspecialchars($kelas) ?>">
            <input type="hidden" name="gender" value="<?php echo htmlspecialchars($gender) ?>">
            <input type="hidden" name="notelp" value="<?php echo htmlspecialchars($telp) ?>">


            <label for="eskulk">Piilih ekstrakulikuler kepemimpinan</label>
            <select name="eskulk" id="eskulk">
                <option value="">Pilih eskul</option>
                <option value="PMR">PMR</option>
                <option value="PKS">PKS</option>
                <option value="PasKibra">PasKibra</option>
                <option value="Pramuka">Pramuka</option>
            </select>

            <p>Pilih ekstrakulikuler pilihan (opsional)</p>
            <label><input type="checkbox" value="Marching Band" name="eskulp[]">Marching Band</label>
            <label><input type="checkbox" value="Japanese Club" name="eskulp[]">Japanese Club</label>
            <label><input type="checkbox" value="English Club" name="eskulp[]">English Club</label>
            <label><input type="checkbox" value="Silat" name="eskulp[]">Silat</label>
            <label><input type="checkbox" value="Tari" name="eskulp[]">Tari</label>
            <label><input type="checkbox" value="Pecinta Alam" name="eskulp[]">Pecinta Alam</label>
            <label><input type="checkbox" value="Badminton" name="eskulp[]">Badminton</label>
            <label><input type="checkbox" value="Futsal" name="eskulp[]">Futsal</label>
            <label><input type="checkbox" value="Voli" name="eskulp[]">Voli</label>
            <label><input type="checkbox" value="Boxing" name="eskulp[]">Boxing</label>
            <label><input type="checkbox" value="Atletik" name="eskulp[]">Atletik</label>

            <label for="alasan">Kenapa kamu memilih eskul-eskul itu? (opsional)</label>
            <textarea id="alasan" name="alasan" placeholder="Masukkan alasanmu disini!"></textarea>


            <div id="error-box" class="error-message"></div>
            <button type="submit">Kirim!</button>
        </form>
    </div>

    <script>
        document.getElementById('user-choice').addEventListener('submit', function(e) {
            const errorBox = document.getElementById('error-box');
            let errors = [];

            const eskulk = document.getElementById('eskulk').value;

            // validasi untuk eskul kepemimpinan
            if (eskulk.length < 1){
                errors.push('Harus memilih satu ekstrakulikuler kepemimpinan!')
            }

            if (errors.length > 0){
                e.preventDefault();

                errorBox.innerHTML = '<b>Error:</b><ul>' + errors.map(err => `<li>${err}</li>`).join('') + '</ul>';
                errorBox.style.display = 'block';
            } else {
                errorBox.style.display = 'none';
            }
        });
    </script>
</body>
</html>