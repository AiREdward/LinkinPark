<?php
session_start();

$currentPage = basename($_SERVER['PHP_SELF']);
$ruolo = $_SESSION['ruolo'] ?? null;
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$email = $_SESSION['email'] ?? '';
?>

<header>
    <h1 lang="en">Linkin Park</h1>
    <button id="hamburger-menu" aria-label="Apri menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
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
            <li><a href="template/admin.html" target="_blank" class="<?= $currentPage == 'template/admin.html' ? 'active' : '' ?>" lang="en">Admin</a></li>
        <?php endif; ?>

        <?php if ($loggedIn): ?>
            <li><a href="#" id="logout-link">Logout</a></li>
        <?php else: ?>
            <li><a href="accedi.php" class="<?= $currentPage == 'accedi.php' ? 'active' : '' ?>">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>

<!-- Popup Modale -->
<div id="logout-modal" class="logout">
    <div class="logout-content">
        <span class="close-btn">&times;</span>
        <h2>Logout</h2>
        <p>Sei sicuro di voler fare il logout?</p>
        <p>Utente: <strong><?= $email ?></strong></p>
        <button class="btnLogout" id="confirm-logout">Conferma</button>
        <button class="btnLogout" id="cancel-logout">Annulla</button>
    </div>
</div>

<script src="js/menu.js"></script>