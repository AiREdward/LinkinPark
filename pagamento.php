<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Pagamento - Linkin Park</title>
    <meta name="author" content="linkins">
    <meta name="description"
        content="Completa il pagamento in modo sicuro e rapido. Inserisci i dati della carta e ottieni una ricevuta dettagliata dei tuoi acquisti. Supporta Linkin Park con il merchandising ufficiale.">
    <meta name="keywords"
        content="pagamento sicuro, checkout online, ricevuta acquisti, carta di credito, conferma ordine, negozio ufficiale band, dettagli acquisto, merchandising rock, pagamento Linkin Park, abbigliamento ufficiale">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="asset/css/pagamento.css" media="all">
    <link rel="stylesheet" href="asset/css/breadcrumb.css" media="all">
    <link rel="stylesheet" href="asset/css/stampa.css" media="print">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
        $breadcrumb = [
            ['name' => 'Home', 'url' => 'index.php'],
            ['name' => 'Shop', 'url' => 'shop.php'],
            ['name' => 'Pagamento', 'url' => 'pagamento.php']
        ];
        include 'includes/breadcrumb.php'; 
    ?>

    <form id="cardForm" action="php/pagamento.php" method="POST">
        <div class="container">
            <div id="left-section">
                <section id="card" aria-labelledby="card-section">
                    <h2 id="card-section">Dettagli della Carta</h2>

                    <button id="proceed" type="submit" aria-label="Procedi al pagamento">
                        <p class="confirmation">Conferma Acquisto</p>
                    </button>

                    <i class="fa-solid fa-building-columns" aria-hidden="true"></i>

                    <label for="n_carta">Numero della carta:</label>
                    <input id="n_carta" type="text" class="input" name="n_carta"
                        placeholder="1234 5678 9101 1121" maxlength="16" required aria-required="true">

                    <label for="nome">Nome completo del proprietario della carta:</label>
                    <input id="nome" class="input" name="nome" placeholder="Mario Rossi" required
                        aria-required="true">

                    <label for="data_scadenza">Data di scadenza:</label>
                    <input type="date" id="data_scadenza" name="data_scadenza" required aria-required="true">

                    <label for="ccv" class="toleft">CCV (codice di sicurezza):</label>
                    <input id="ccv" class="input toleft" name="ccv" placeholder="321" maxlength="4" required
                        aria-required="true">
                </section>

                <section id="data" role="region" aria-labelledby="data-section">
                    <article class="col receipt-details" aria-labelledby="receipt-details">
                        <h2 id="receipt-details">Dati Utente</h2>
                        <p>Totale:</p>
                        <h3 class="cost" id="subtotal" aria-live="polite">€0.00</h3>
                        <p>Utente:</p>
                        <h3 class="user" id="user-name" aria-live="polite">Nome Cognome</h3>
                    </article>
                </section>

                <button id="cancel" type="button" onclick="confermaAnnullamento()" aria-label="Annulla pagamento">
                    Annulla Pagamento
                </button>
            </div>

            <section id="receipt" role="region" aria-labelledby="receipt-section">
                <h2 id="receipt-section">Ricevuta</h2>

                <article class="col" id="bought-items-container" aria-labelledby="bought-items-title">
                    <h3 id="bought-items-title">Lista degli acquisti:</h3>
                    <div id="bought-items" aria-live="polite">
                        <!-- I prodotti del carrello verranno aggiunti qui -->
                    </div>
                </article>
            </section>
            
        </div>

        <div id="custom-popup" class="popup hidden" role="dialog" aria-labelledby="popup-title" aria-describedby="popup-description">
            <div class="popup-content">
                <h3 id="popup-title">Conferma Annullamento</h3>
                <p id="popup-description">Stai per tornare alla schermata di shop. Sei sicuro di voler annullare il pagamento?</p>
                <button class="popup-btn" id="confirm-cancel">Sì</button>
                <button class="popup-btn" id="close-popup">No</button>
            </div>
        </div>

    </form>

    <script src="js/payment.js"></script>

</body>

</html>
