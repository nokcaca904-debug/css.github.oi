<?php

session_start();
include "koneksi.php";

$error = "";

if (isset($_POST['login'])) {

    $nama = trim($_POST['nama']);
    $sandi = $_POST['sandi'];

    // Cari admin berdasarkan nama
    $query = "SELECT * FROM login_admin WHERE nama = ?";

    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $nama);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {

        $admin = mysqli_fetch_assoc($result);

        // Karena sandi di database masih berupa teks biasa
        if ($sandi === $admin['sandi']) {

            // Membuat session login
            session_regenerate_id(true);

            $_SESSION['admin_login'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_nama'] = $admin['nama'];

            // Masuk ke dashboard
            header("Location: dashboard.php");
            exit();

        } else {

            $error = "Nama atau sandi salah.";

        }

    } else {

        $error = "Nama atau sandi salah.";

    }

    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login Admin - TeleBee</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="../assets/login.css"
    >

</head>

<body class="login-page">

    <div class="login-container">

        <div class="login-logo">
            📖
        </div>

        <h1>
            Login Admin
        </h1>

        <p class="login-description">
            Masuk untuk mengelola cerita TeleBee.
        </p>

        <?php if ($error != ""): ?>

            <div class="login-error">
                <?php echo htmlspecialchars($error); ?>
            </div>

        <?php endif; ?>

        <form
            action=""
            method="POST"
            class="login-form"
        >

            <div class="form-group">

                <label for="nama">
                    Nama Admin
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama admin"
                    required
                >

            </div>

            <div class="form-group">

                <label for="sandi">
                    Sandi
                </label>

                <input
                    type="password"
                    id="sandi"
                    name="sandi"
                    placeholder="Masukkan sandi"
                    required
                >

            </div>

            <button
                type="submit"
                name="login"
                class="login-submit"
            >
                Login Admin
            </button>

        </form>

        <a
            href="index.php"
            class="back-home"
        >
            ← Kembali ke Beranda
        </a>

    </div>

</body>

</html>