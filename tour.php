<?php include 'includes/db_config.php'; ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Eventi del Tour - Linkin Park</title>
    <meta name="author" content="linkins">
    <meta name="description" content="Scopri le date del tour dei Linkin Park: luoghi, orari e dettagli degli eventi in tutto il mondo. Unisciti a noi per una serata indimenticabile con la tua band preferita!">
    <meta name="keywords" content="Linkin Park tour, concerti Linkin Park, date tour, eventi musicali, concerti live, biglietti concerti, luoghi tour, Linkin Park eventi">
    <meta name="viewport" content="width=device-width">

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/timeline.css" media="screen">
</head>

<body>
    <main>
        <?php include 'includes/menu.php'; ?>
        <h2>Prossimi Eventi del Tour</h2>

        <dl id="tour-dates">
            <?php
            setlocale(LC_TIME, 'it_IT.UTF-8', 'it_IT', 'Italian');

            $sql = "SELECT citta, data, orario, luogo, paese, descrizione, prezzo FROM tour ORDER BY data";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $citta = htmlspecialchars($row['citta']);
                    $data = htmlspecialchars($row['data']);
                    $orario = substr(htmlspecialchars($row['orario']), 0, 5);
                    $luogo = htmlspecialchars($row['luogo']);
                    $paese = htmlspecialchars($row['paese']);
                    $descrizione = htmlspecialchars($row['descrizione']);
                    $prezzo = number_format($row['prezzo'], 2, ',', '.');
                
                    $formattedDate = strftime("%d %B %Y", strtotime($data));
                    ?>
            <dt>
                <h3>
                    <?php echo $paese; ?>
                </h3>
            </dt>
            <dd id="<?php echo $citta . '_' . $data; ?>" onclick="openDetails(this)" role="button" tabindex="0"
                aria-expanded="false" aria-controls="<?php echo $citta . '_' . $data; ?>_details">
                <p>
                    <strong>
                        <?php echo $citta; ?>
                    </strong> -
                    <time datetime="<?php echo $data; ?>">
                        <?php echo $formattedDate; ?>
                    </time>
                </p>

                <div id="<?php echo $citta . '_' . $data; ?>_details" class="extra-details" hidden aria-hidden="true">
                    <p>
                        <?php echo $descrizione; ?> Alle ore
                        <strong>
                            <?php echo $orario; ?>
                        </strong>.
                    </p>
                    <p>Luogo: <a href="https://www.google.com/maps?q=<?php echo urlencode($luogo); ?>" target="_blank">
                            <?php echo $luogo; ?>
                        </a> di
                        <?php echo $citta; ?>.
                    </p>
                    <p>
                        Prezzo del biglietto: <strong>&euro;
                            <?php echo $prezzo; ?>
                        </strong>
                    </p>
                    <div class="button-container">
                        <button aria-label="Compra Biglietto per <?php echo $citta; ?>"
                            onclick="handleTicketPurchase(event, '<?php echo $citta; ?>')">Compra Biglietto</button>
                        <button class="close-details" aria-label="Chiudi dettagli per <?php echo $citta; ?>"
                            onclick="closeDetails(event, this)">Chiudi</button>
                    </div>
                </div>
            </dd>
            <?php
                }
            } else {
                ?>
            <p id="no-events">Nessun evento disponibile al momento. Torna a trovarci presto!</p>
            <?php
            }
            $conn->close();
            ?>
        </dl>

        <?php include 'includes/scrollToTop.php'; ?>

    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tourItems = document.querySelectorAll('#tour-dates dd');

            tourItems.forEach(item => {
                item.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter') {
                        event.preventDefault(); // Evita l'eventuale comportamento predefinito
                        openDetails(item);
                    }
                });
            });
        });

        function openDetails(element) {
            const details = element.querySelector('.extra-details');
            if (details) {
                details.removeAttribute('hidden');
                details.setAttribute('aria-hidden', 'false');
                element.setAttribute('aria-expanded', 'true');
            }
        }

        function closeDetails(event, button) {
            event.stopPropagation(); // Evita che il clic chiuda i dettagli subito dopo
            const details = button.closest('.extra-details');
            if (details) {
                details.setAttribute('hidden', '');
                details.setAttribute('aria-hidden', 'true');
                const parent = details.parentElement;
                if (parent) parent.setAttribute('aria-expanded', 'false');
            }
        }

        async function handleTicketPurchase(event, city) {
            event.stopPropagation();
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

</body>

</html>