<?php
session_start();

$currentPage = basename($_SERVER['PHP_SELF']);
$ruolo = $_SESSION['ruolo'] ?? null;
?>

<head>
    <!--Lato, PT Sans, Bebas Neue -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<head>

<header>
    <h1 lang="en">Linkin Park</h1>
</header>

<nav id="menu" role="navigation" aria-label="Menu principale">
    <ul>
        <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="chisiamo.php" class="<?= $currentPage == 'chisiamo.php' ? 'active' : '' ?>">Chi Siamo</a></li>
        <li><a href="diario.php" class="<?= $currentPage == 'diario.php' ? 'active' : '' ?>">Diario</a></li>
        <li><a href="tour.php" class="<?= $currentPage == 'tour.php' ? 'active' : '' ?>">Tour</a></li>
        <li><a href="musica.php" class="<?= $currentPage == 'musica.php' ? 'active' : '' ?>">Musica</a></li>
        <li><a href="shop.php" class="<?= $currentPage == 'shop.php' ? 'active' : '' ?>">Shop</a></li>

        <?php if ($ruolo === 'admin'): ?>
            <li><a href="template/admin.html" class="<?= $currentPage == 'template/admin.html' ? 'active' : '' ?>">Admin</a></li>
        <?php endif; ?>

        <li><a href="accedi.php" class="<?= $currentPage == 'accedi.php' ? 'active' : '' ?>">Login</a></li>
    </ul>
</nav>
