<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <meta name="author" content="linkins">
    <meta name="description" content="TODO">
    <meta name="keywords" content="TODO">
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="asset/css/style.css" media="screen">
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
            <div class="card" id="TracksWhiteTee" data-type="maglietta">
                <div class="card-front">
                    <h3>Tracks White Tee</h3>
                    <img src="asset/img/merch/maglietta1_fronte.webp" alt="Tracks White Tee">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Maglietta leggera e dal tocco unico, perfetta per accompagnarti in ogni avventura. Morbida, fresca e sempre pronta a farti sentire a tuo agio, ovunque tu vada. Uno di quei capi che non vedi l'ora di indossare, giorno dopo giorno!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="BlackTee" data-type="maglietta">
                <div class="card-front">
                    <h3>Black Tee</h3>
                    <img src="asset/img/merch/maglietta2_fronte.webp" alt="Black Tee">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Maglietta che unisce comfort e carattere, pensata per chi ama sentirsi libero in ogni momento. Un capo che si adatta a te e al tuo stile, semplice ma con personalità. Indossala e preparati a conquistare la giornata con leggerezza e un pizzico di energia!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="PhotoCollageBlackTee" data-type="maglietta">
                <div class="card-front">
                    <h3>Photo Collage Black Tee</h3>
                    <img src="asset/img/merch/maglietta3_fronte.webp" alt="Photo Collage Black Tee">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>La maglietta che non ti abbandona mai: morbida, pratica e sempre al tuo fianco. Perfetta per rilassarti, muoverti o semplicemente essere te stesso. Non importa dove ti porti la giornata, lei sarà lì a darti il comfort che meriti!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="Cover4OrchidCropTee" data-type="maglietta">
                <div class="card-front">
                    <h3>Cover 4 Orchid Crop Tee</h3>
                    <img src="asset/img/merch/maglietta4_fronte.webp" alt="Cover 4 Orchid Crop Tee">
                    <p class="price">€50,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Maglietta essenziale e super comoda, pensata per chi ama la libertà di movimento. Leggera, fresca e con un design che si adatta ad ogni occasione. Un capo che non può mancare nel tuo guardaroba, perfetto per sentirti sempre a tuo agio e in piena forma!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>

            <!-- Sez. Felpe -->
            <div class="card" id="TextureBlackLSTee" data-type="felpa">
                <div class="card-front">
                    <h3>Texture Black LS Tee</h3>
                    <img src="asset/img/merch/felpa1_fronte.webp" alt="Texture Black LS Tee">
                    <p class="price">€60,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Felpa morbida e accogliente, perfetta per affrontare la giornata con comfort e stile. Ideale per quei momenti di relax o per aggiungere un tocco casual al tuo look. Con il suo design semplice e versatile, sarà il tuo compagno ideale in ogni occasione!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="OrchidCrewneck" data-type="felpa">
                <div class="card-front">
                    <h3>Orchid Crewneck</h3>
                    <img src="asset/img/merch/felpa2_fronte.webp" alt="Orchid Crewneck">
                    <p class="price">€60,00</p>
                    <select class="size-select">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Felpa comoda e calda, pensata per offrirti il massimo del comfort in ogni situazione. Perfetta per le giornate più fresche o per un look casual ma ricercato. Un capo essenziale che ti farà sentire sempre a tuo agio e pronto a tutto!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>


            <!-- Sez. Accessori -->
            <div class="card" id="TieDyeBeanie" data-type="accessori">
                <div class="card-front">
                    <h3>Tie Dye Beanie</h3>
                    <img src="asset/img/merch/berretto.webp" alt="TieDyeBeanie">
                    <p class="price">€35,00</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Beanie che unisce comfort e stile, perfetto per tenere al caldo la testa nelle giornate fredde. Semplice, versatile e sempre alla moda, questo accessorio è un must-have per ogni look casual e informale, che non passerà mai inosservato!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="ToteBag" data-type="accessori">
                <div class="card-front">
                    <h3>Tote Bag</h3>
                    <img src="asset/img/merch/borsa.webp" alt="Tote Bag">
                    <p class="price">€40,00</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Borsa di tela pratica e resistente, ideale per ogni giorno. Ampia e leggera, ti accompagnerà in ogni tua avventura, dal lavoro alla spesa. Un accessorio semplice ma funzionale, che aggiunge un tocco di stile al tuo outfit quotidiano.</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="PewterKeychain" data-type="accessori">
                <div class="card-front">
                    <h3>Pewter Keychain</h3>
                    <img src="asset/img/merch/portachiavi.webp" alt="Pewter Keychain">
                    <p class="price">€8,50</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Portachiavi compatto e funzionale, perfetto per tenere tutte le tue chiavi in ordine. Un piccolo accessorio che fa la differenza, semplice ma con carattere, ideale per aggiungere un tocco personale ai tuoi oggetti quotidiani.</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>
            <div class="card" id="StickerSet" data-type="accessori">
                <div class="card-front">
                    <h3>Sticker Set</h3>
                    <img src="asset/img/merch/stckers.webp" alt="Sticker Set">
                    <p class="price">€3,00</p>
                    <input type="number" min="1" max="5" value="1" class="quantity-input">
                    <button class="add-to-cart-btn">Aggiungi al carrello</button>
                    <button class="info-btn">Info</button>
                </div>
                <div class="card-back">
                    <p>Stickers divertenti e colorati, pronti a decorare tutto ciò che vuoi. Dai libero sfogo alla tua creatività e personalizza i tuoi oggetti con un tocco di originalità. Piccoli, ma capaci di fare una grande impressione!</p>
                    <button class="info-btn">Indietro</button>
                </div>
            </div>

        </section>

        <nav id="cart">
            <h3>Carrello</h3>
            <div id="cart-items">
                <!-- Gli articoli del carrello verranno aggiunti qui tramite JavaScript -->
            </div>
        </nav>
    </div>
    <p id="no-results" style="display: none;">Nessun risultato trovato.</p>

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
                    console.log('Response from loadCart:', data);
                    document.getElementById('cart-items').innerHTML = data;
                    updateSubtotal();
                });
        }

        function updateSubtotal() {
            var cartItemContainer = document.getElementsByClassName('cart-items')[0];
            var cartRows = cartItemContainer.getElementsByClassName('cart-row');
            var total = 0;
            for (var i = 0; i < cartRows.length; i++) {
                var cartRow = cartRows[i];
                var priceElement = cartRow.getElementsByClassName('cart-price')[0];
                var quantityElement = cartRow.getElementsByClassName('quantity-input-cart')[0];
                var price = parseFloat(priceElement.innerText.replace('$', ''));
                var quantity = quantityElement.value;
                total = total + (price * quantity);
            }
            total = Math.round(total * 100) / 100;
            document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;

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

        document.querySelectorAll('.card').forEach(card => {
            card.querySelectorAll('.info-btn').forEach(button => {
                button.addEventListener('click', () => {
                    card.classList.toggle('flipped');
                });
            });
        });

        function filterItems(type, value) {
            // Rimuovi lo stato 'active-filter' da tutti i bottoni all'interno del contenitore .filters-buttons
            document.querySelectorAll('.filters-buttons button').forEach(button => {
                button.classList.remove('active-filter');
            });
        
            // Aggiungi lo stato 'active-filter' al bottone cliccato
            const button = event.target;
            button.classList.add('active-filter');
        
            // Filtra gli elementi in base al tipo e valore specificati
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                if (type === 'all' || (card.dataset[type] && card.dataset[type] === value)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        
            // Mostra o nasconde il messaggio "Nessun risultato trovato"
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

    <!-- Script per il controllo dell'altezza del carrello --> <!-- NON TOGLIERE -->
    <script>
        function setRelativeHeight(referenceSelector, targetSelector) {
            var referenceElement = document.querySelector(referenceSelector);
            var targetElement = document.querySelector(targetSelector);
                
            if (referenceElement && targetElement) {
                var referenceHeight = referenceElement.offsetHeight;
                targetElement.style.maxHeight = referenceHeight + 'px';
            }
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            setRelativeHeight('#shop', '#cart');
        });
    </script>
    <?php include 'includes/footer.php'; ?>

</body>

</html>