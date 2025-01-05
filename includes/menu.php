<?php
session_start();

$currentPage = basename($_SERVER['PHP_SELF']);
$ruolo = $_SESSION['ruolo'] ?? null;
?>

<header>
    <h1 lang="en">Linkin Park</h1>
</header>

<nav id="menu" role="navigation" aria-label="Menu principale">
    <ul>
        <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>" lang="en">Home</a></li>
        <li><a href="chisiamo.php" class="<?= $currentPage == 'chisiamo.php' ? 'active' : '' ?>">Chi Siamo</a></li>
        <li><a href="diario.php" class="<?= $currentPage == 'diario.php' ? 'active' : '' ?>">Diario</a></li>
        <li><a href="tour.php" class="<?= $currentPage == 'tour.php' ? 'active' : '' ?>" lang="en">Tour</a></li>
        <li><a href="musica.php" class="<?= $currentPage == 'musica.php' ? 'active' : '' ?>">Musica</a></li>
        <li><a href="shop.php" class="<?= $currentPage == 'shop.php' ? 'active' : '' ?>" lang="en">Shop</a></li>

        <?php if ($ruolo === 'admin'): ?>
            <li><a href="template/admin.html" target="_blank" class="<?= $currentPage == 'template/admin.html' ? 'active' : '' ?>" lang="en">Admin</a></li>
        <?php endif; ?>

        <li><a href="accedi.php" class="<?= $currentPage == 'accedi.php' ? 'active' : '' ?>" lang="en">Login</a></li>
    </ul>
</nav>
