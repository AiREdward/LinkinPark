<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Shop - Linkin Park</title>
    <meta name="author" content="linkins">
    <meta name="description" content="Negozio ufficioso dei Linkin Park e scopri il merchandising esclusivo: magliette, felpe e accessori dedicati ai fan. Trova il tuo prodotto preferito tra design unici ispirati alla band.">
    <meta name="keywords" content="Linkin Park, merchandising ufficioso, magliette band, felpe tour, accessori musicali, shop rock, prodotti esclusivi, abbigliamento band, souvenir concerti, articoli musica, negozio ufficiale band">
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="asset/css/style.css" media="all">
    <link rel="stylesheet" href="asset/css/stampa.css" media="print">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

    <?php
        $breadcrumb = [
            ['name' => 'Home', 'url' => 'index.php'],
            ['name' => 'Shop', 'url' => 'shop.php']
        ];
        include 'includes/menu.php'; 
    ?>

    <main>
        <h1>Shop</h1>
        <div class="filters">
            <!-- Search Bar -->
            <div class="search-container">
                <label for="search-bar">Ricerca</label>
                <input type="text" id="search-bar" placeholder="Cerca prodotti..." oninput="searchItems()">
                
                <i class="search-icon fas fa-search"></i>
            </div>
        
            <!-- Contenitore dei Filtri -->
            <div class="filters-buttons">
                <button class="active-filter" onclick="filterItems('all')">Mostra Tutto</button>
                <button onclick="filterItems('type', 'maglietta')">Magliette</button>
                <button onclick="filterItems('type', 'felpa')">Felpe</button>
                <button onclick="filterItems('type', 'accessori')">Accessori</button>
            </div>
        </div>

        <button id="cart-hamburger-menu" aria-expanded="false">
            Carrello<i class="fa-sharp fa-solid fa-cart-shopping"></i>
        </button>

        <div id="container-shop">
            
            <section id="shop">

                <!-- Sez. Maglie -->
                <article class="card" id="MagliaMercurio" data-type="maglietta">
                    <h2>Maglia Mercurio</h2>
                    <img src="asset/img/merch/maglietta1_fronte.webp" alt="Maglia bianca Linkin Park con stampa blu astratta e scritta From Zero" width="300" height="300">
                    <p class="price">€50,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="size-MagliaMercurio">Taglia:</label>
                        <select id="size-MagliaMercurio" class="size-select">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <label for="quantity-MagliaMercurio">Quantità:</label>
                        <input type="number" id="quantity-MagliaMercurio" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="MagliaVenere" data-type="maglietta">
                    <h2>Maglia Venere</h2>
                    <img src="asset/img/merch/maglietta2_fronte.webp" alt="Maglia nera Linkin Park con stampa rosa e scritta From Zero" width="300" height="300">
                    <p class="price">€50,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="size-MagliaVenere">Taglia:</label>
                        <select id="size-MagliaVenere" class="size-select">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <label for="quantity-MagliaVenere">Quantità:</label>
                        <input type="number" id="quantity-MagliaVenere" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="MagliaGiove" data-type="maglietta">
                    <h2>Maglia Giove</h2>
                    <img src="asset/img/merch/maglietta3_fronte.webp" alt="Maglia nera con stampa verde e scritta gialla Linkkin Park From Zero" width="300" height="300">
                    <p class="price">€50,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="size-MagliaGiove">Taglia:</label>
                        <select id="size-MagliaGiove" class="size-select">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <label for="quantity-MagliaGiove">Quantità:</label>
                        <input type="number" id="quantity-MagliaGiove" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="MagliaSaturno" data-type="maglietta">
                    <h2>Maglia Saturno</h2>
                    <img src="asset/img/merch/maglietta4_fronte.webp" alt="Maglia bianca con stampa a colori del logo Linkin Park" width="300" height="300">
                    <p class="price">€50,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="size-MagliaSaturno">Taglia:</label>
                        <select id="size-MagliaSaturno" class="size-select">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <label for="quantity-MagliaSaturno">Quantità:</label>
                        <input type="number" id="quantity-MagliaSaturno" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>

                <!-- Sez. Felpe -->
                <article class="card" id="FelpaUrano" data-type="felpa">
                    <h2>Felpa Urano</h2>
                    <img src="asset/img/merch/felpa1_fronte.webp" alt="Felpa nera con scritte Linkin Park e From Zero" width="300" height="300">
                    <p class="price">€60,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="size-FelpaUrano">Taglia:</label>
                        <select id="size-FelpaUrano" class="size-select">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <label for="quantity-FelpaUrano">Quantità:</label>
                        <input type="number" id="quantity-FelpaUrano" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="FelpaNettuno" data-type="felpa">
                    <h2>Felpa Nettuno</h2>
                    <img src="asset/img/merch/felpa2_fronte.webp" alt="Felpa rosa con stampa a colori del logo Linkin Park" width="300" height="300">
                    <p class="price">€60,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="size-FelpaNettuno">Taglia:</label>
                        <select id="size-FelpaNettuno" class="size-select">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <label for="quantity-FelpaNettuno">Quantità:</label>
                        <input type="number" id="quantity-FelpaNettuno" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>

                <!-- Sez. Accessori -->
                <article class="card" id="BerrettoFuoco" data-type="accessori">
                    <h2>Berretto Fuoco</h2>
                    <img src="asset/img/merch/berretto.webp" alt="Berretto a macchie colorite con logo Linkin Park" width="300" height="300">
                    <p class="price">€35,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="quantity-BerrettoFuoco">Quantità:</label>
                        <input type="number" id="quantity-BerrettoFuoco" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="BorsaTerra" data-type="accessori">
                    <h2>Borsa Terra</h2>
                    <img src="asset/img/merch/borsa.webp" alt="Borsa nera con stampa a colori del logo Linkin Parks" width="300" height="300">
                    <p class="price">€40,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="quantity-BorsaTerra">Quantità:</label>
                        <input type="number" id="quantity-BorsaTerra" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="PortachiaviAria" data-type="accessori">
                    <h2>Portachiavi Aria</h2>
                    <img src="asset/img/merch/portachiavi.webp" alt="Portachiavi grigio con logo Linkin Park e scritta From Zero" width="300" height="300">
                    <p class="price">€8,50</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="quantity-PortachiaviAria">Quantità:</label>
                        <input type="number" id="quantity-PortachiaviAria" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>
                <article class="card" id="Adesivi Acqua" data-type="accessori">
                    <h2>Adesivi Acqua</h2>
                    <img src="asset/img/merch/stckers.webp" alt="Adesivi Linkin Park con logo e con copertina album From Zero" width="300" height="300">
                    <p class="price">€3,00</p>
                    <div class="sizeAndQuantityContainer">
                        <label for="quantity-AdesiviAcqua">Quantità:</label>
                        <input type="number" id="quantity-AdesiviAcqua" min="1" max="5" value="1" class="quantity-input">
                    </div>
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </article>

                <p id="no-results">Nessun risultato trovato.</p>

            </section>

            <aside id="cart">
                <button id="close-cart-btn" aria-label="Chiudi Carrello">&times;</button>
                <h2>Carrello</h2>
                <div id="cart-items" class="cart-items">
                <!-- Gli articoli del carrello verranno aggiunti qui tramite JavaScript -->
                </div>
            </aside>
        </div>
    </main>

    <script src="js/cart.js"></script> 
    <script src="js/filter_manager.js"></script>
    <script src="js/checkout.js"></script>

    <?php include 'includes/scrollToTop.php'; ?>
    <?php include 'includes/footer.php'; ?>

</body>

</html>