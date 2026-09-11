<?php

session_start();

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_login']) || $_SESSION['admin_login'] !== true) {
    header("Location: login.php");
    exit();
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

    <title>Dashboard Admin - TeleBee</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="../assets/admin.css"
    >

</head>


<body class="admin-dashboard">


    <!-- ================================
         NAVBAR ADMIN
    ================================= -->

    <nav class="admin-navbar">

        <div class="admin-logo">
             TeleBee
        </div>

        <div class="admin-nav">

            <a href="../index.php">
                🌐 Lihat Website
            </a>

            <a href="logout.php" class="logout-btn">
                🚪 Logout
            </a>

        </div>

    </nav>



    <!-- ================================
         CONTENT
    ================================= -->

    <main class="admin-content">


        <!-- WELCOME -->

        <div class="admin-welcome">

            <span class="welcome-icon">
                👋
            </span>

            <div>

                <h1>
                    Halo, <?php echo htmlspecialchars($_SESSION['admin_nama']); ?>!
                </h1>

                <p>
                    Selamat datang di Dashboard Admin TeleBee.
                </p>

            </div>

        </div>



        <!-- ================================
             MENU ADMIN
        ================================= -->

        <section class="admin-menu">


            <!-- TAMBAH CERITA -->

            <a href="tambah.php" class="admin-card">

                <div class="admin-icon">
                    ✍️
                </div>

                <div class="admin-card-text">

                    <h2>
                        Tambah Cerita
                    </h2>

                    <p>
                        Tambahkan cerita baru ke TeleBee.
                    </p>

                </div>

                <span class="admin-arrow">
                    →
                </span>

            </a>



            <!-- KELOLA CERITA -->

            <a href="index.php" class="admin-card">

                <div class="admin-icon">
                    📚
                </div>

                <div class="admin-card-text">

                    <h2>
                        Kelola Cerita
                    </h2>

                    <p>
                        Lihat, edit, dan hapus cerita yang sudah dibuat.
                    </p>

                </div>

                <span class="admin-arrow">
                    →
                </span>

            </a>



            <!-- LIHAT WEBSITE -->

            <a href="../index.php" class="admin-card">

                <div class="admin-icon">
                    🌐
                </div>

                <div class="admin-card-text">

                    <h2>
                        Lihat Website
                    </h2>

                    <p>
                        Kunjungi halaman utama TeleBee.
                    </p>

                </div>

                <span class="admin-arrow">
                    →
                </span>

            </a>


        </section>



        <!-- ================================
             INFORMASI
        ================================= -->

        <section class="admin-info">

            <h2>
                💡 Informasi
            </h2>

            <p>
                Gunakan dashboard ini untuk mengelola cerita
                yang ditampilkan di website TeleBee.
            </p>

        </section>


    </main>



    <!-- ================================
         FOOTER
    ================================= -->

    <footer class="admin-footer">

        <p>
            © 2026 TeleBee. Admin Panel.
        </p>

    </footer>


</body>

</html>