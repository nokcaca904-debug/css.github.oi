<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Cerita - StoryVerse</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/cerita.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="logo">
            <span>TeleBee</span>
        </div>

        <nav>

            <a href="index.php">
                Beranda
            </a>

            <a href="cerita.php" class="active">
                Cerita
            </a>

            <a href="genre.php">
                Genre
            </a>

            <a href="tentang.php">
                Tentang
            </a>

            <a href="lgn.php">
                Log in
            </a>

            <a href="login.php" class="login-btn">
                Login Admin
            </a>

        </nav>

    </header>


    <!-- ================= HEADER CERITA ================= -->

    <section class="story-header">

        <div>

            <span class="story-label">
                STORYVERSE
            </span>

            <h1>
                Jelajahi Cerita
            </h1>

            <p>
                Temukan berbagai cerita menarik dari berbagai genre
                dan nikmati perjalanan setiap kisahnya.
            </p>

        </div>

    </section>


    <!-- ================= SEARCH ================= -->

    <section class="story-search">

        <form action="cerita.php" method="GET">

            <input
                type="text"
                name="cari"
                placeholder="🔍 Cari judul cerita..."
                value="<?php echo isset($_GET['cari']) ? htmlspecialchars($_GET['cari']) : ''; ?>"
            >

            <button type="submit">
                Cari
            </button>

        </form>

    </section>


    <!-- ================= DAFTAR CERITA ================= -->

    <main class="container">

        <div class="story-page-title">

            <div>
                <span>KOLEKSI</span>

                <h2>
                    Semua Cerita
                </h2>
            </div>

        </div>


        <div class="story-grid">


            <!-- ================= CERITA 1 ================= -->

            <div class="card">

                <img
                    src="img/cover1.jpg"
                    alt="Aku Hanya Pengganti Anak yang Hilang"
                >

                <div class="content">

                    <span class="genre">
                        Drama • Family • Romance
                    </span>

                    <h3>
                        Aku Hanya Pengganti Anak yang Hilang
                    </h3>

                    <p>
                        Kisah tentang keluarga, rahasia masa lalu,
                        dan seorang anak yang harus menemukan tempatnya.
                    </p>

                    <a href="baca.php?id=1">
                        Baca Sekarang →
                    </a>

                </div>

            </div>


            <!-- ================= CERITA 2 ================= -->

            <div class="card">

                <img
                    src="img/cover2.jpg"
                    alt="Rubik Cinta"
                >

                <div class="content">

                    <span class="genre">
                        Romance • School
                    </span>

                    <h3>
                        Rubik Cinta
                    </h3>

                    <p>
                        Sebuah kisah cinta remaja yang penuh
                        kejutan dan lika-liku.
                    </p>

                    <a href="baca.php?id=2">
                        Baca Sekarang →
                    </a>

                </div>

            </div>


            <!-- ================= CERITA 3 ================= -->

            <div class="card">

                <img
                    src="img/cover3.jpg"
                    alt="Asrama Sebelas Bintang"
                >

                <div class="content">

                    <span class="genre">
                        Comedy • Friendship
                    </span>

                    <h3>
                        Asrama Sebelas Bintang
                    </h3>

                    <p>
                        Kehidupan penghuni asrama dengan
                        persahabatan dan berbagai kekacauan.
                    </p>

                    <a href="baca.php?id=3">
                        Baca Sekarang →
                    </a>

                </div>

            </div>


            <!-- ================= CERITA 4 ================= -->

            <div class="card">

                <img
                    src="img/cover4.jpg"
                    alt="A Life Unscripted"
                >

                <div class="content">

                    <span class="genre">
                        Slice of Life
                    </span>

                    <h3>
                        A Life Unscripted
                    </h3>

                    <p>
                        Cerita tentang kehidupan, pilihan,
                        dan perjalanan menemukan diri sendiri.
                    </p>

                    <a href="baca.php?id=4">
                        Baca Sekarang →
                    </a>

                </div>

            </div>


        </div>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-content">

            <h3>
                TeleBee
            </h3>

            <p>
                Tempat cerita dimulai dan imajinasi berkembang.
            </p>

            <span>
                © 2026 TeleBee. Semua Hak Dilindungi.
            </span>

        </div>

    </footer>


    <script src="script.js"></script>

</body>

</html>