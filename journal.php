<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Diario</title>
    <meta name="keywords" content="TODO">
    <meta name="description" content="TODO">
    <meta name = "author" content = "linkins">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="asset/css/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="asset/css/mobile.css" media="screen and (max-width:600px)">

</head>

<body>

    <?php include 'includes/menu.php'; ?>

    <main>
        <dl id = "storia">
            <dt><time datetime="2022-01-01">1 Gennaio 2022</time></dt>
            <dd><img src="https://placehold.co/70x70?text=img" alt=""></dd>
            <dd><p>Come abbiamo formato la band........<a href="#article1" class="readMore">leggi più</a></p></dd>


            <dt><time datetime="2022-03-13">13 Marzo 2022</time></dt>
            <dd><img src="https://placehold.co/70x70?text=img" alt=""></dd>
            <dd><p>Il nostro primo performance........<a href="#article2" class="readMore">leggi più</a></p></dd>

            
            <dt><time datetime="2024-10-07">7 Ottobre 2024</time></dt>
            <dd><img src="https://placehold.co/70x70?text=img" alt=""></dd>
            <dd><p>L'ultimo grande successo.......<a href="#article3" class="readMore">leggi più</a></p></dd>
        </dl>

        <article id="article1" class="pop-up" hidden>   <!--magari meglio controllare la visibilita' del contenuto pop-up con CSS?-->
            <h2>Titolo</h2>   <!--quale h?-->
            <button type="button" class="closePop-up">X</button>
            <p>l'intero testo...immagini...video...</p>
        </article>

        <article id="article2" class="pop-up" hidden>
            <h2>Titolo</h2>
            <button type="button" class="closePop-up">X</button>
            <p>l'intero testo...immagini...video...</p>
        </article>

        <article id="article3" class="pop-up" hidden>
            <h2>Titolo</h2>
            <button type="button" class="closePop-up">X</button>
            <p>l'intero testo...immagini...video...</p>
        </article>

    </main>

    <hr>
    
    <?php include 'includes/footer.php'; ?>

</body>

</html>
