<?php include 'includes/db_config.php'; ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="linkins">
    <meta name="description" content="Scopri le date del tour dei Linkin Park: luoghi, orari e dettagli 
        degli eventi in tutto il mondo. Unisciti a noi per una serata indimenticabile con la tua band preferita!">
    <meta name="keywords" content="Linkin Park tour, concerti Linkin Park, date tour, eventi musicali, concerti 
        live, biglietti concerti, luoghi tour, Linkin Park eventi">
    <meta name="viewport" content="width=device-width">

    <title>Eventi del Tour</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/style.css" media="screen">
    <link rel="stylesheet" href="asset/css/timeline.css" media="screen">

</head>

<body>
    <main>
        <?php include 'includes/menu.php'; ?>
        <h1>Prossimi Eventi del Tour</h1>
        <dl>
            <?php
            // Imposta il locale italiano per la formattazione delle date
            setlocale(LC_TIME, 'it_IT.UTF-8', 'it_IT', 'Italian');

            $sql = "SELECT citta, data, orario, luogo, paese, descrizione FROM tour ORDER BY data";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $citta = htmlspecialchars($row['citta']);
                    $data = htmlspecialchars($row['data']);
                    $orario = substr(htmlspecialchars($row['orario']), 0, 5); // Estrae HH:MM
                    $luogo = htmlspecialchars($row['luogo']);
                    $paese = htmlspecialchars($row['paese']);
                    $descrizione = htmlspecialchars($row['descrizione']);

                    // Converte la data in formato italiano
                    $formattedDate = strftime("%d %B %Y", strtotime($data));
                    ?>
                    <dt>
                        <?php echo $paese; ?>
                    </dt>
                    <dd id="<?php echo $citta . '_' . $data; ?>" onclick="toggleDetails(this)">
                        <p>
                            <strong>
                                <?php echo $citta; ?>
                            </strong> -
                            <time datetime="<?php echo $data; ?>"><?php echo $formattedDate; ?></time>
                        </p>

                        <div class="extra-details" hidden aria-hidden="true">
                            <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>

                            <p>
                                <?php echo $descrizione; ?> Alle ore 
                                <strong><?php echo $orario; ?></strong>.
                            </p>
                            <p>Luogo: <a href="https://www.google.com/maps?q=<?php echo urlencode($luogo); ?>" target="_blank">
                                    <?php echo $luogo; ?>
                                </a> di
                                <?php echo $citta; ?>.
                            </p>
                            <button aria-label="Compra Biglietto per <?php echo $citta; ?>"
                                onclick="handleTicketPurchase(event, '<?php echo $citta; ?>')">Compra Biglietto</button>
                        </div>
                    </dd>
                    <?php
                }
            } else {
                echo "<p>Nessun evento disponibile al momento.</p>";
            }
            $conn->close();
            ?>
        </dl>
    </main>

    <script>
        // JavaScript Integrato
        function toggleDetails(element) {
            const details = element.querySelector('.extra-details');
            if (details) {
                const isHidden = details.hasAttribute('hidden');
                details.toggleAttribute('hidden');
                details.setAttribute('aria-hidden', isHidden ? 'false' : 'true');
            }
        }

        function closeDetails(event, button) {
            event.stopPropagation(); // Evita che il clic chiuda i dettagli subito dopo
            const details = button.closest('.extra-details');
            if (details) {
                details.setAttribute('hidden', '');
                details.setAttribute('aria-hidden', 'true');
            }
        }

        function handleTicketPurchase(event, city) {
            alert(`Biglietto per ${city} acquistato!`);
        }
    </script>
</body>

</html>