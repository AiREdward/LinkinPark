<!DOCTYPE html>

<html lang="it">

<head>
    <title lang="en">Linkin Park</title>
    <meta charset="UTF-8">
    <meta name="description" content="TODO">
    <meta name="keywords" content="TODO">
    <meta name="author" content="linkins">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="asset/css/style.css" media="screen">
    <link rel="stylesheet" href="css/social.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="asset/css/mobile.css" media="screen and (max-width:600px)">
</head>

<body>

    <?php include 'includes/menu.php'; ?>

    <main>
        <h1><span lang="en">Homepage</span></h1>
        <!-- grande immagine del gruppo -->
        <div id="homeMusic">
            <!-- immagine ultimo album -->
            <img src="asset/img/album/From Zero.jpeg" alt="">
            <h2>From Zero</h2>
            <!-- <button type="button" class="link" onclick="location.href='music.html'">Scopri di più</button>
            link?? -->
            <p>Ascolta su <a href="https://open.spotify.com/album/4R6FV9NSzhPihHR0h4pI93" target="_blank" lang="en">Spotify</a></p>
        </div>
        <div id="homeTour">
            <!-- immagine ultimo evento -->
            <img src="asset/img/tour/foto tour computer.webp" alt="">
            <h2>From Zero Tour</h2>
            <button type="button" class="link" onclick="location.href='tour.php'">Partecipa</button>
        </div>
        <div id="homeJournal">
            <!-- immagine ultima entrata Journal -->
            <img src="asset/img/diario/LP riunione articolo5.jpg" alt="immagine del gruppo">
            <h2>Il nuovo capitolo con Emily Armstrong e Colin Brittain</h2>
            <button type="button" class="link" onclick="location.href='journal.php'">Scopri di più</button>
            <!-- trovare una frase migliore per il button -->
        </div>

        <!-- Popup per account -->
        <div id="accountPopup" class="hidden">
            <p>Sei loggato come: <span id="accountEmail"></span></p>
            <button id="logoutButton">Log Out</button>
        </div>
    </main>

    <script src="js/index.js"></script>

    <?php include 'includes/footer.php'; ?>

</body>
</html>