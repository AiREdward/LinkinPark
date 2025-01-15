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

    <?php include 'includes/menu.php'; ?>

    <div class="filters">
        <!-- Search Bar -->
        <div class="search-container">
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

    <div id="main">
        <section id="shop">

            <!-- Sez. Maglie -->
            <div class="card" id="MagliaMercurio" data-type="maglietta">
                <div class="card-front">
                    <h3>Maglia Mercurio</h3>
                    <img src="asset/img/merch/maglietta1_fronte.webp" alt="Maglia Mercurio">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="MagliaVenere" data-type="maglietta">
                <div class="card-front">
                    <h3>Maglia Venere</h3>
                    <img src="asset/img/merch/maglietta2_fronte.webp" alt="Maglia Venere">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="MagliaGiove" data-type="maglietta">
                <div class="card-front">
                    <h3>Maglia Giove</h3>
                    <img src="asset/img/merch/maglietta3_fronte.webp" alt="Maglia Giove">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="MagliaSaturno" data-type="maglietta">
                <div class="card-front">
                    <h3>Maglia Saturno</h3>
                    <img src="asset/img/merch/maglietta4_fronte.webp" alt="Maglia Saturno">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>

            <!-- Sez. Felpe -->
            <div class="card" id="FelpaUrano" data-type="felpa">
                <div class="card-front">
                    <h3>Felpa Urano</h3>
                    <img src="asset/img/merch/felpa1_fronte.webp" alt="Felpa Urano">
                    <p class="price">€60,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="FelpaNettuno" data-type="felpa">
                <div class="card-front">
                    <h3>Felpa Nettuno</h3>
                    <img src="asset/img/merch/felpa2_fronte.webp" alt="Felpa Nettuno">
                    <p class="price">€60,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>


            <!-- Sez. Accessori -->
            <div class="card" id="BerrettoFuoco" data-type="accessori">
                <div class="card-front">
                    <h3>Berretto Fuoco</h3>
                    <img src="asset/img/merch/berretto.webp" alt="Berretto Fuoco">
                    <p class="price">€35,00</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="BorsaTerra" data-type="accessori">
                <div class="card-front">
                    <h3>Borsa Terra</h3>
                    <img src="asset/img/merch/borsa.webp" alt="Borsa Terra">
                    <p class="price">€40,00</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="PortachiaviAria" data-type="accessori">
                <div class="card-front">
                    <h3>Portachiavi Aria</h3>
                    <img src="asset/img/merch/portachiavi.webp" alt="Portachiavi Aria">
                    <p class="price">€8,50</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>
            <div class="card" id="Adesivi Acqua" data-type="accessori">
                <div class="card-front">
                    <h3>Adesivi Acqua</h3>
                    <img src="asset/img/merch/stckers.webp" alt="Adesivi Acqua">
                    <p class="price">€3,00</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                </div>
            </div>

            <p id="no-results">Nessun risultato trovato.</p>

        </section>

        <nav id="cart">
            <h3>Carrello</h3>
            <div id="cart-items" class="cart-items">
                <!-- Gli articoli del carrello verranno aggiunti qui tramite JavaScript -->
            </div>
        </nav>
    </div>

    <!-- Script per la gestione del carrello -->
    <script>
        function addToCart(itemName, itemPrice, quantity, itemImage, itemSize) {
            console.log('Adding to cart:', itemName, itemPrice, quantity, itemImage, itemSize);
            const formData = new FormData();
            formData.append('action', 'add');
            formData.append('itemName', itemName);
            formData.append('itemPrice', itemPrice);
            formData.append('quantity', quantity);
            formData.append('itemImage', itemImage);
            formData.append('itemSize', itemSize);

            fetch('./php/shop.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log('Response from addToCart:', data);
                    document.getElementById('cart-items').innerHTML = data;
                    updateSubtotal();
                });
        }

        function removeFromCart(itemName) {
            console.log('Removing from cart:', itemName);
            const formData = new FormData();
            formData.append('action', 'remove');
            formData.append('itemName', itemName);

            fetch('./php/shop.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log('Response from removeFromCart:', data);
                    document.getElementById('cart-items').innerHTML = data;
                    updateSubtotal();
                });
        }

        function loadCart() {
            console.log('Loading cart');
            fetch('./php/shop.php', {
                method: 'POST',
                body: new URLSearchParams({ action: 'load' })
            })
                .then(response => response.text())
                .then(data => {
                    //console.log('Response from loadCart:', data);
                    document.getElementById('cart-items').innerHTML = data;
                    updateSubtotal();
                });
        }

        function updateSubtotal() {
            var cartItemContainer = document.getElementById('cart-items');
            var cartRows = cartItemContainer.getElementsByClassName('cart-item');
            var total = 0;
            for (var i = 0; i < cartRows.length; i++) {
                var cartRow = cartRows[i];
                var priceElement = cartRow.getElementsByClassName('price')[0];
                var quantityElement = cartRow.getElementsByClassName('quantity-input')[0];
                var price = parseFloat(priceElement.innerText.replace('€', '').replace(',', '.'));
                var quantity = quantityElement.value;
                total = total + (price * quantity);
            }
            total = Math.round(total * 100) / 100;
            document.getElementById('subtotal').innerText = 'Subtotale: €' + total;
            
            // Show/Hide buttons if cart items > 0
            var clearCartBtn = document.getElementById('clear-cart-btn');
            if (cartRows.length === 0) {
                clearCartBtn.classList.add('hidden');
            } else {
                clearCartBtn.classList.remove('hidden');
            }
        }

        function clearCart() {
            console.log('Clearing cart');
            fetch('./php/shop.php', {
                method: 'POST',
                body: new URLSearchParams('action=clear')
            })
                .then(response => response.text())
                .then(data => {
                    console.log('Response from clearCart:', data);
                    document.getElementById('cart-items').innerHTML = data;
                    updateSubtotal();
                    toggleCartButtons();
                });
        }

        document.addEventListener('DOMContentLoaded', () => {
            loadCart();

            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', event => {
                    const card = event.target.closest('.card');
                    const itemName = card.querySelector('h3').textContent;
                    const itemPrice = parseFloat(card.querySelector('.price').textContent.replace('€', '').replace(',', '.'));
                    const quantity = parseInt(card.querySelector('.quantity-input').value, 10);
                    const itemImage = card.querySelector('img').src;
                    const itemSize = card.querySelector('.size-select') ? card.querySelector('.size-select').value : '';

                    console.log('Adding item:', itemName, itemPrice, quantity, itemImage, itemSize);
                    if (quantity > 0 && quantity <= 5) {
                        addToCart(itemName, itemPrice, quantity, itemImage, itemSize);
                    } else {
                        alert("Seleziona una quantità valida.");
                    }
                });
            });

            document.getElementById('cart-items').addEventListener('input', event => {
                if (event.target.classList.contains('quantity-input-cart')) {
                    const itemName = event.target.getAttribute('data-item');
                    const newQuantity = parseInt(event.target.value, 10);
                    console.log('Updating quantity for item:', itemName, newQuantity);
                    const item = cartItems.find(i => i.name === itemName);

                    if (item && newQuantity > 0) {
                        item.quantity = newQuantity;
                        updateSubtotal();
                    }
                }
            });

            // Initial check to hide buttons if cart is empty
            updateSubtotal();
        });
    </script>

    <!-- Script per la ricerca degli elementi e gestione del filtro-->
    <script>
        function searchItems() {
            const query = document.getElementById('search-bar').value.toLowerCase();
            let hasResults = false;

            document.querySelectorAll('.card').forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const description = card.querySelector('.card-back p').textContent.toLowerCase();
                if (title.includes(query) || description.includes(query)) {
                    card.style.display = 'block';
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                }
            });

            // Mostra o nasconde il messaggio "Nessun risultato trovato"
            document.getElementById('no-results').style.display = hasResults ? 'none' : 'block';
        }

        function filterItems(type, value) {
            // Rimuovi lo stato 'active-filter' dai bottoni
            document.querySelectorAll('.filters-buttons button').forEach(button => {
                button.classList.remove('active-filter');
            });

            // Aggiungi lo stato 'active-filter' al bottone cliccato
            const button = event.target;
            button.classList.add('active-filter');

            // Filtra le card
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                if (type === 'all' || (card.dataset[type] && card.dataset[type] === value)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            // Controlla se ci sono risultati visibili
            const visibleCards = Array.from(cards).filter(card => card.style.display === 'block');
            document.getElementById('no-results').style.display = visibleCards.length ? 'none' : 'block';
        }

    </script>

    <!-- Script per il controllo dello stato di login e reindirizzamento -->
    <script>

        async function handleCheckout() {
            event.stopPropagation(); // Evita che il clic chiami `toggleDetails`
            const isLoggedIn = await checkLoginStatus();

            if (isLoggedIn) {
                // Utente loggato: vai direttamente alla pagina di acquisto
                window.location.href = `pagamento.html`;
            } else {
                // Utente non loggato: reindirizza alla pagina di login con redirect alla pagina di acquisto
                const redirectUrl = encodeURIComponent(`pagamento.html`);
                window.location.href = `accedi.php?redirect=${redirectUrl}`;
            }
        }

        async function checkLoginStatus() {
            // Verifica lo stato di login tramite una chiamata al server
            const response = await fetch("php/check_login.php", { method: "GET" });
            if (response.ok) {
                const data = await response.json();
                return data.logged_in; // Ritorna true o false in base alla risposta del server
            } else {
                console.error("Errore durante il controllo dello stato di login.");
                return false;
            }
        }
    </script>

    <?php include 'includes/scrollToTop.php'; ?>
    <?php include 'includes/footer.php'; ?>

</body>

</html>