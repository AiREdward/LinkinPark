<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header>
    <h1 lang="en">Wishbone</h1>
    <h2>I vicini ci odiano dal 2007</h2>
</header>

<nav id="breadcrumb">
    <p>Ti trovi in <span lang="en">Home</span></p>
</nav>

<nav id="menu">
    <ul>
        <li><a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="aboutus.php" class="<?= $currentPage == 'aboutus.php' ? 'active' : '' ?>">About Us</a></li>
        <li><a href="journal.php" class="<?= $currentPage == 'journal.php' ? 'active' : '' ?>">Journal</a></li>
        <li><a href="tour.php" class="<?= $currentPage == 'tour.php' ? 'active' : '' ?>">Tour</a></li>
        <li><a href="music.php" class="<?= $currentPage == 'music.php' ? 'active' : '' ?>">Music</a></li>
        <li><a href="shop.php" class="<?= $currentPage == 'shop.php' ? 'active' : '' ?>">Shop</a></li>
        <li><a href="login.php" class="<?= $currentPage == 'login.php' ? 'active' : '' ?>">Login</a></li>
    </ul>
</nav>