<!DOCTYPE html>

<html lang="it">

<head>
    <title>Home - Linkin Park</title>
    <meta charset="UTF-8">
    <meta name="description" content="Le ultime novità dei Linkin Park: dal nuovo album al tour in corso.">
    <meta name="keywords" content="linkin park,from zero,emily armstrong,colin brittain,world tour,rock band,rock">
    <meta name="author" content="linkins">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="asset/css/style.css" media="all">
    <link rel="stylesheet" href="asset/css/breadcrumb.css" media="all">
    <link rel="stylesheet" href="asset/css/stampa.css" media="print">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="asset/css/mobile.css" media="screen and (max-width:600px)">
    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <?php
        $breadcrumb = [
            ['name' => 'Home', 'url' => 'index.php']
        ]; 

        include 'includes/menu.php'; 
    ?>

    <main>
        <h1><span lang="en">Homepage</span></h1>
        <div id="homeMusic">
            <img src="asset/img/album/From Zero.webp" alt="">
            <h2 lang="en">From Zero</h2>
            <p>Ascolta <a href="https://open.spotify.com/album/4R6FV9NSzhPihHR0h4pI93" target="_blank"><span lang="en">From Zero</span> su <span lang="en">Spotify</span></a></p>
        </div>
        <hr>
        <div id="homeTour">
            <img src="asset/img/tour/foto tour computer.webp" alt="">
            <h2 lang="en">From Zero Tour</h2>
            <button type="button" class="link" onclick="location.href='tour.php'">Partecipa</button>
        </div>
        <hr>
        <div id="homeJournal">
            <img src="asset/img/diario/LP riunione articolo5.webp" alt="immagine del gruppo">
            <h2>Il nuovo capitolo con <span lang="en">Emily Armstrong</span> e <span lang="en">Colin Brittain</span></h2>
            <button type="button" class="link" onclick="location.href='diario.php'">Scopri di più</button>
        </div>

        <?php include 'includes/scrollToTop.php'; ?>

    </main>

    
    <script src="js/index.js"></script>

    <?php include 'includes/footer.php'; ?>

</body>
</html>