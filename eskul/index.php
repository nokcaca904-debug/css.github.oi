<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ekstrakulikuler</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-card">
        <h2>Pemilihan ekstrakulikuler</h2>
        <p>Masukkan dulu data diri anda.</p>
        <form action="eskul.php" method="post" id="user-data">
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Masukkan nama Anda" id="name">
            <label for="kelas">Kelas</label>
            <select name="class" id="kelas">
                <option value=""> Pilih Kelas </option>
                <option value="10 PPLG 1">10 PPLG 1</option>
                <option value="10 PPLG 2">10 PPLG 2</option>
                <option value="10 PPLG 3">10 PPLG 3</option>
                <option value="10 PPLG 4">10 PPLG 4</option>
                <option value="10 TJKT 1">10 TJKT 1</option>
                <option value="10 TJKT 2">10 TJKT 2</option>
                <option value="10 TJKT 3">10 TJKT 3</option>
                <option value="10 TJKT 4">10 TJKT 4</option>
                <option value="10 AT 1">10 AT 1</option>
                <option value="10 AT 2">10 AT 2</option>
                <option value="10 AT 3">10 AT 3</option>
                <option value="10 AT 4">10 AT 4</option>
                <option value="10 TE 1">10 TE 1</option>
                <option value="10 TE 2">10 TE 2</option>
                <option value="10 TE 3">10 TE 3</option>
            </select>

            <p>Gender</p>
            <label><input type="radio" name="gender" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="gender" value="perempuan">Perempuan</label>

            <label for="telp">Nomor Telepon</label>
            <input type="tel" name="notelp" id="telp" placeholder="08********">

            <div id="error-box" class="error-message" style="display: none;"></div>

            <button type="submit">Lanjut</button>
        </form> 
    </div>

    <script>
        document.getElementById('user-data').addEventListener('submit', function(e) {
            const errorBox = document.getElementById('error-box');
            let errors = [];

            const name = document.getElementById('name').value.trim();
            const kelas = document.getElementById('kelas').value;
            const gender = document.querySelector('input[name="gender"]:checked');
            const telp = document.getElementById('telp').value.trim();
            console.log(gender);

            // validasi nama
            const nameRegEx = /^[a-zA-Z\s]+$/;
            if (name == ''){
                errors.push('Nama harus diisi!');
            } else if (name.length < 3){
                errors.push('Nama minimal berisi 3 karakter!');
            } else if (!nameRegEx.test(name)){
                errors.push('Nama hanya boleh berisi huruf dan spasi!');
            }

            // validasi kelas
            if (kelas == ''){
                errors.push('Silahkan pilih kelas.');
            }

            // validasi gender
            if (!gender){
                errors.push('Silahkan pilih gender.')
            }

            // validasi no telp (format angka 08..., dengan panjang 10 hingga 13 digit)
            const phoneRegEx = /^08[0-9]{8,11}$/;
            if (telp == ''){
                errors.push('Nomor telepon harus diisi!');
            } else if (!phoneRegEx.test(telp)){
                errors.push('Format nomor telepon tidak sesuai!');
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