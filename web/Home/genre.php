<?php

include "../config/koneksi.php";

/** @var mysqli $koneksi */

// Ambil genre dari URL
$genre_dipilih = isset($_GET['genre']) ? $_GET['genre'] : "";

// Daftar genre
$daftar_genre = [
    "Romance",
    "Drama",
    "Comedy",
    "Fantasy",
    "Horror",
    "Action",
    "Mystery",
    "Thriller",
    "School",
    "Friendship",
    "Family",
    "Adventure",
    "Slice of Life"
];

// Jika genre dipilih, ambil cerita berdasarkan genre
$cerita = [];

if ($genre_dipilih !== "") {

    $genre = mysqli_real_escape_string($koneksi, $genre_dipilih);

    $query = "SELECT * FROM cerita 
              WHERE genre LIKE '%$genre%'
              ORDER BY id DESC";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $cerita[] = $row;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $genre_dipilih ? htmlspecialchars($genre_dipilih) . " - TeleBee" : "Genre - TeleBee"; ?>
    </title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/genre.css"> 
</head>

<body>


<!-- =========================
     NAVBAR
========================= -->

<header class="navbar">

    <div class="logo">
        TeleBee
    </div>

    <nav>

        <a href="index.php">
            Beranda
        </a>

        <a href="cerita.php">
            Cerita
        </a>

        <a href="genre.php">
            Genre
        </a>

        <a href="#">
            Tentang
        </a>

        <a href="lgn.php" class="login-btn">
            Log in
        </a>

        <a href="login.php" class="login-btn">
            Login Admin
        </a>

    </nav>

</header>


<!-- =========================
     HERO
========================= -->

<section class="genre-hero">

    <div class="honeycomb honey-left"></div>

    <div class="honeycomb honey-right"></div>

    <div class="bee">
        🐝
    </div>

    <h1>
        Jelajahi <span>Genre</span>
    </h1>

    <p>
        Temukan cerita favoritmu berdasarkan genre yang kamu sukai 🍯
    </p>

</section>


<!-- =========================
     PILIH GENRE
========================= -->

<section class="genre-section">

    <h2 class="genre-title">
        Pilih Genre Cerita
    </h2>

    <div class="genre-list">

        <?php foreach ($daftar_genre as $genre): ?>

            <a
                href="genre.php?genre=<?php echo urlencode($genre); ?>"
                class="genre-item <?php echo ($genre_dipilih === $genre) ? 'active' : ''; ?>"
            >

                <?php echo htmlspecialchars($genre); ?>

            </a>

        <?php endforeach; ?>

    </div>

</section>


<!-- =========================
     HASIL CERITA
========================= -->

<?php if ($genre_dipilih !== ""): ?>

<section class="story-section">

    <h2 class="story-title">

        Cerita Genre
        <span>
            <?php echo htmlspecialchars($genre_dipilih); ?>
        </span>

    </h2>


    <?php if (count($cerita) > 0): ?>

        <div class="story-grid">

            <?php foreach ($cerita as $row): ?>

                <div class="card">

                    <?php if (!empty($row['cover'])): ?>

                        <img
                            src="<?php echo htmlspecialchars($row['cover']); ?>"
                            alt="<?php echo htmlspecialchars($row['judul']); ?>"
                            class="card-image"
                        >

                    <?php else: ?>

                        <img
                            src="https://picsum.photos/300/400?random=<?php echo $row['id']; ?>"
                            alt="Cover cerita"
                            class="card-image"
                        >

                    <?php endif; ?>


                    <div class="card-content">

                        <h3>
                            <?php echo htmlspecialchars($row['judul']); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($row['genre']); ?>
                        </p>

                        <a
                            href="detail.php?id=<?php echo $row['id']; ?>"
                            class="read-btn"
                        >
                            Baca Sekarang →
                        </a>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    <?php else: ?>

        <div class="empty">

            <div class="bee-icon">
                🐝
            </div>

            <h3>
                Belum ada cerita
            </h3>

            <p>
                Belum ada cerita dengan genre
                "<?php echo htmlspecialchars($genre_dipilih); ?>".
            </p>

        </div>

    <?php endif; ?>

</section>

<?php endif; ?>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <h3>
        TeleBee 🐝
    </h3>

    <p>
        © 2026 TeleBee. Semua Hak Dilindungi.
    </p>

</footer>


</body>

</html>