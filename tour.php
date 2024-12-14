<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Tour</title>
    <meta author="linkins">
    <meta name="description" content="TODO">
    <meta name="keywords" content="TODO">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="asset/css/style.css" media="screen">
    <link rel="stylesheet" href="asset/css/timeline.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
</head>

<body>

    <?php include 'includes/menu.php'; ?>
    
    <main>
        <h3>Date in Europa</h3>
        <dl id="EuropeanTour">
            <dt>Germania</dt>
            <dd id="Hannover_2025-06-16" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="de">Hannover</span></strong> - <span lang="de">Heinz-Von-Heiden Arena</span>
                    <time datetime="2025-06-16">16 Giugno 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto unico a <span lang="de">Hannover</span> presso il <a href="https://www.google.com/maps?q=Heinz-Von-Heiden Arena"
                            target="_blank"><span lang="de">Heinz-Von-Heiden Arena</span></a>!</p>
                    <button aria-label="Compra Biglietto per Hannover" onclick="handleTicketPurchase(event, 'Hannover')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="Berlino_2025-06-18" onclick="toggleDetails(this)">
                <p>
                    <strong>Berlino</strong> - <span lang="de">Olympiastadion</span>
                    <time datetime="2025-06-18">18 Giugno 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto unico a Berlino presso il <a href="https://www.google.com/maps?q=Olympiastadion"
                            target="_blank"><span lang="de">Olympiastadion</span></a>!</p>
                    <button aria-label="Compra Biglietto per Berlino" onclick="handleTicketPurchase(event, 'Berlino')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="Francoforte_2025-07-08" onclick="toggleDetails(this)">
                <p>
                    <strong>Francoforte</strong> - Deutsche Bank Park
                    <time datetime="2025-07-08">08 Luglio 2025</time><br>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>

                    <p>Concerto emozionante allo <a href="https://www.google.com/maps?q=Deutsche_Bank_Park"
                            target="_blank">Deutsche Bank Park</a> di Francoforte.</p>
                    <button aria-label="Compra Biglietto per Francoforte" onclick="handleTicketPurchase(event, 'Francoforte')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Italia</dt>
            <dd id="Milano_2025-06-24" onclick="toggleDetails(this)">
                <p>
                    <strong>Milano</strong> - Stadio San Siro
                    <time datetime="2025-06-24">24 Giugno 2025</time>
                </p>
                
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>

                    <p>Grande serata al <a href="https://www.google.com/maps?q=San-Siro" target="_blank">Stadio San Siro</a> di Milano.</p>
                    <button aria-label="Compra Biglietto per Milano" onclick="handleTicketPurchase(event, 'Milano')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Regno Unito</dt>
            <dd id="Londra_2025-06-28" onclick="toggleDetails(this)">
                <p>
                    <strong>Londra</strong> - Wembley Stadium
                    <time datetime="2025-06-28">28 Giugno 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>

                    <p>Non perdere l'evento al <a href="https://www.google.com/maps?q=Wembley_Stadium" target="_blank">Wembley Stadium</a> di Londra.</p>
                    <button aria-label="Compra Biglietto per Londra" onclick="handleTicketPurchase(event, 'Londra')">Compra Biglietto</button>
                </div>
            </dd>
        </dl>

        <h3>Date in Asia</h3>
        <dl id="AsianTour">
            <dt>Arabia Saudita</dt>
            <dd id="Riyadh_2024-12-12" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="ar">Riyadh</span></strong> - <span lang="en">Soundstorm Music Festival</span>
                    <time datetime="2024-12-12">12 Dicembre 2024</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Grande evento allo <a href="https://www.google.com/maps?q=Soundstorm Music Festival" target="_blank"><span lang="en">Soundstorm Music Festival</span></a> di <span lang="ar">Riyadh</span>.</p>
                    <button aria-label="Compra Biglietto per Riyadh" onclick="handleTicketPurchase(event, 'Riyadh')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Giappone</dt>
            <dd id="Saitama_2025-02-11" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="ja">Saitama</span></strong> - <span lang="ja">Saitama Super Arena</span>
                    <time datetime="2025-02-11">11 Febbraio 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Spettacolare concerto al <a href="https://www.google.com/maps?q=Saitama Super Arena" target="_blank"><span lang="ja">Saitama Super Arena</span></a> di <span lang="ja">Saitama</span>.</p>
                    <button aria-label="Compra Biglietto per Saitama" onclick="handleTicketPurchase(event, 'Saitama')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Indonesia</dt>
            <dd id="Jakarta_2025-02-16" onclick="toggleDetails(this)">
                <p>
                    <strong>Jakarta</strong> - GBK Madya Stadium
                    <time datetime="2025-02-16">16 Febbraio 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Grande evento allo <a href="https://www.google.com/maps?q=GBK Madya Stadium" target="_blank">GBK Madya Stadium</a> di Jakarta.</p>
                    <button aria-label="Compra Biglietto per Jakarta" onclick="handleTicketPurchase(event, 'Jakarta')">Compra Biglietto</button>
                </div>
            </dd>
        </dl>

        <h3>Date in America</h3>
        <dl id="AmericanTour">
            <dt>Stati Uniti</dt>
            <dd id="Brooklyn_2025-07-29" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="en">Brooklyn</span>, <abbr title="New York">NY</abbr></strong> - <span lang="en">Barclays Center</span>
                    <time datetime="2025-07-29">29 Luglio 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Barclays Center" target="_blank"><span lang="en">Barclays Center</span></a> di <span lang="en">Brooklyn</span>.</p>
                    <button aria-label="Compra Biglietto per Brooklyn" onclick="handleTicketPurchase(event, 'Brooklyn')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="Boston_2025-08-01" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="en">Boston</span>, <abbr title="Massachusetts">MA</abbr></strong> - <span lang="en">TD Garden</span>
                    <time datetime="2025-08-01">01 Agosto 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=TD Garden" target="_blank"><span lang="en">TD Garden</span></a> di <span lang="en">Boston</span>.</p>
                    <button aria-label="Compra Biglietto per Boston" onclick="handleTicketPurchase(event, 'Boston')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="Philadelphia_2025-08-16" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="en">Philadelphia</span>, <abbr title="Pennsylvania">PA</abbr></strong> - <span lang="en">Wells Fargo Center</span>
                    <time datetime="2025-08-16">16 Agosto 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Wells Fargo Center" target="_blank"><span lang="en">Wells Fargo Center</span></a> di <span lang="en">Philadelphia</span>.</p>
                    <button aria-label="Compra Biglietto per Philadelphia" onclick="handleTicketPurchase(event, 'Philadelphia')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="Detroit_2025-08-16" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="en">Detroit</span>, <abbr title="Michigan">MI</abbr></strong> - <span lang="en">Wells Fargo Center</span>
                    <time datetime="2025-08-16">16 Agosto 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Wells Fargo Center" target="_blank"><span lang="en">Wells Fargo Center</span></a> di <span lang="en">Detroit</span>.</p>
                    <button aria-label="Compra Biglietto per Detroit" onclick="handleTicketPurchase(event, 'Detroit')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="LosAngeles_2025-09-13" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="en">Los Angeles</span>, <abbr title="California">CA</abbr></strong> - <span lang="en">Dodger Stadium</span>
                    <time datetime="2025-09-13">13 Settembre 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Dodger Stadium" target="_blank"><span lang="en">Dodger Stadium</span></a> di <span lang="en">Los Angeles</span>.</p>
                    <button aria-label="Compra Biglietto per Los Angeles" onclick="handleTicketPurchase(event, 'Los Angeles')">Compra Biglietto</button>
                </div>
            </dd>
            <dd id="LosAngeles_2024-09-12" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="en">Los Angeles</span>, <abbr title="California">CA</abbr></strong> - <span lang="en">Staples Center</span>
                    <time datetime="2024-09-12">12 Settembre 2024</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Non perdere il concerto al <a href="https://www.google.com/maps?q=Staples Center" target="_blank"><span lang="en">Staples Center</span></a> di <span lang="en">Los Angeles</span>.</p>
                    <button aria-label="Compra Biglietto per Los Angeles" onclick="handleTicketPurchase(event, 'Los Angeles')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Colombia</dt>
            <dd id="Bogota_2025-10-26" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="es">Bogotá</span></strong> - <span lang="es">Nemesio Camacho El Campín Stadium</span>
                    <time datetime="2025-10-26">26 Ottobre 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Nemesio Camacho El Campín Stadium" target="_blank"><span lang="es">Nemesio Camacho El Campín Stadium</span></a> di <span lang="es">Bogotá</span>.</p>
                    <button aria-label="Compra Biglietto per Bogotá" onclick="handleTicketPurchase(event, 'Bogotá')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Argentina</dt>
            <dd id="BuenosAires_2025-11-01" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="es">Buenos Aires</span></strong> - <span lang="es">Estadio Alberto José Armando</span>
                    <time datetime="2025-11-01">01 Novembre 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Estadio Alberto José Armando" target="_blank"><span lang="es">Estadio Alberto José Armando</span></a> di <span lang="es">Buenos Aires</span>.</p>
                    <button aria-label="Compra Biglietto per Buenos Aires" onclick="handleTicketPurchase(event, 'Buenos Aires')">Compra Biglietto</button>
                </div>
            </dd>
            <dt>Brasile</dt>
            <dd id="SaoPaulo_2025-11-10" onclick="toggleDetails(this)">
                <p>
                    <strong><span lang="pt">São Paulo</span></strong> - <span lang="pt">Neo Química Arena</span>
                    <time datetime="2025-11-10">10 Novembre 2025</time>
                </p>
                <div class="extra-details" hidden>
                    <button class="close-details" onclick="closeDetails(event, this)">Chiudi</button>
                    <p>Concerto al <a href="https://www.google.com/maps?q=Neo Química Arena" target="_blank"><span lang="pt">Neo Química Arena</span></a> di <span lang="pt">São Paulo</span>.</p>
                    <button aria-label="Compra Biglietto per São Paulo" onclick="handleTicketPurchase(event, 'São Paulo')">Compra Biglietto</button>
                </div>
            </dd>
        </dl>
    </main>
    <footer>
        <img class="imgValidCode" src="asset/img/valid-xhtml10.png" alt="HTML valido">
        <p>Ombretta Gaggi, Cactus &amp; Federazione Italiana Pallavolo - <span lang="en">All rights Reserved</span></p>
    </footer>
    <script>
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

        async function handleTicketPurchase(event, city) {
            event.stopPropagation(); // Evita che il clic chiami `toggleDetails`
            const isLoggedIn = await checkLoginStatus();

            if (isLoggedIn) {
                // Utente loggato: vai direttamente alla pagina di acquisto
                window.location.href = `ticket.php?city=${encodeURIComponent(city)}`;
            } else {
                // Utente non loggato: reindirizza alla pagina di login con redirect alla pagina di acquisto
                const redirectUrl = encodeURIComponent(`ticket.php?city=${city}`);
                window.location.href = `login.php?redirect=${redirectUrl}`;
            }
        }

        function toggleDetails(element) {
            // Chiude tutti i dettagli aperti in altri tour
            document.querySelectorAll(".extra-details").forEach(details => {
                details.hidden = true;
            });

            // Mostra solo i dettagli dell'elemento cliccato
            const details = element.querySelector(".extra-details");
            if (details) {
                details.hidden = !details.hidden;
            }
        }

        function closeDetails(event, button) {
            // Evita la propagazione dell'evento al <dd>
            event.stopPropagation();

            // Chiude il div "extra-details" più vicino
            const details = button.closest(".extra-details");
            if (details) {
                details.hidden = true;
            }
        }

    </script>

</body>

</html>