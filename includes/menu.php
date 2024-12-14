<?php
session_start();

$currentPage = basename($_SERVER['PHP_SELF']);
$ruolo = $_SESSION['ruolo'] ?? null; // Recupera il ruolo dell'utente loggato
?>

<header>
    <h1 lang="en">Linkin Park</h1>
</header>

<nav id="breadcrumb">
    <p>Ti trovi in <span lang="en">Home</span></p>
</nav>

<nav id="menu" role="navigation" aria-label="Menu principale">
    <ul>
        <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="aboutus.php" class="<?= $currentPage == 'aboutus.php' ? 'active' : '' ?>">About Us</a></li>
        <li><a href="journal.php" class="<?= $currentPage == 'journal.php' ? 'active' : '' ?>">Journal</a></li>
        <li><a href="tour.php" class="<?= $currentPage == 'tour.php' ? 'active' : '' ?>">Tour</a></li>
        <li><a href="music.php" class="<?= $currentPage == 'music.php' ? 'active' : '' ?>">Music</a></li>
        <li><a href="shop.php" class="<?= $currentPage == 'shop.php' ? 'active' : '' ?>">Shop</a></li>

        <?php if ($ruolo === 'admin'): ?>
            <li><a href="admin.html" class="<?= $currentPage == 'admin.html' ? 'active' : '' ?>">Admin</a></li>
        <?php endif; ?>

        <li><a href="login.php" class="<?= $currentPage == 'login.php' ? 'active' : '' ?>">Login</a></li>
    </ul>
</nav>
