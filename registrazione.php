<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="linkins">
    <meta name="description"
        content="Crea un account sul nostro sito per accedere a tutte le funzionalità. Compila il modulo di registrazione in modo rapido e sicuro.">
    <meta name="keywords"
        content="registrazione account, crea account, registrati online, registrazione sicura, modulo di registrazione, accesso account, registrazione sito web">
    <meta name="viewport" content="width=device-width">

    <title>Registrati</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/style.css" media="all">
    <link rel="stylesheet" href="asset/css/stampa.css" media="print">
    <link rel="stylesheet" href="asset/css/login.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <main>
        <div class="main-container">
            <!-- Left Section -->
            <div class="left-section">
                <h1>Benvenuto!</h1>
                <p>Compila il modulo per creare un account e accedere a tutte le funzionalità del nostro sito.</p>
                <p>Hai già un account? <a href="accedi.php">Accedi qui</a></p>
                <p>Torna alla <a href="index.php"><span lang="en">Home</span></a></p>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <form action="php/registration.php" method="post" onsubmit="return validateForm()">
                    <div id="error-message" class="error"></div>

                    <div class="input-container full-width">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="Inserisci la tua email">
                    </div>

                    <div class="input-container full-width">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required
                            placeholder="Inserisci la tua password" oninput="checkPasswordStrength()">
                        <div class="password-strength">
                            <div id="strength-bar"></div>
                        </div>
                    </div>

                    <div class="input-container full-width">
                        <label for="conferma-password">Conferma Password:</label>
                        <input type="password" id="conferma-password" name="conferma-password" required
                            placeholder="Conferma la tua password">
                    </div>

                    <div class="input-container">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required placeholder="Inserisci il tuo nome">
                    </div>

                    <div class="input-container">
                        <label for="cognome">Cognome:</label>
                        <input type="text" id="cognome" name="cognome" required placeholder="Inserisci il tuo cognome">
                    </div>

                    <div class="input-container">
                        <label for="indirizzo">Indirizzo:</label>
                        <input type="text" id="indirizzo" name="indirizzo" required
                            placeholder="Inserisci il tuo indirizzo">
                    </div>

                    <div class="input-container">
                        <label for="telefono">Telefono:</label>
                        <input type="tel" id="telefono" name="telefono" required
                            placeholder="Inserisci il tuo telefono">
                    </div>

                    <div class="input-container full-width">
                        <label for="data_nascita">Data di Nascita:</label>
                        <input type="date" id="data_nascita" name="data_nascita">
                    </div>

                    <div class="checkbox-container full-width">
                        <label>
                            <input type="checkbox" id="privacy" name="privacy" required> Accetto la <a href="#"
                                onclick="openModal('privacyModal')">Privacy Policy</a>.
                        </label>
                    </div>

                    <div class="checkbox-container full-width">
                        <label>
                            <input type="checkbox" id="termini" name="termini" required> Accetto i <a href="#"
                                onclick="openModal('termsModal')">Termini di Servizio</a>.
                        </label>
                    </div>

                    <!-- Modale Privacy Policy -->
                    <div id="privacyModal" class="modal" onclick="closeModalOutside(event, 'privacyModal')">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('privacyModal')">&times;</span>
                            <section>
                                <h2>1. Titolare del Trattamento</h2>
                                <p>
                                    Il titolare del trattamento dei dati è Linkin Park, con sede legale in
                                    Piazza delle Erbe, 35 35122 Padova PD. Puoi contattarci all'indirizzo email:
                                    linkinpark@assistenza.it.
                                </p>
                            </section>

                            <section>
                                <h2>2. Tipologie di Dati Raccolti</h2>
                                <p>
                                    Raccogliamo dati personali come nome, email, dati di pagamento e dati di navigazione
                                    sul sito. I
                                    dati vengono raccolti al momento della registrazione, dell'acquisto e della
                                    navigazione.
                                </p>
                            </section>

                            <section>
                                <h2>3. Finalità e Basi Giuridiche del Trattamento</h2>
                                <p>
                                    I dati vengono utilizzati per completare gli acquisti, gestire le prenotazioni e
                                    migliorare
                                    l'esperienza utente, in conformità con il GDPR. Utilizziamo i dati personali
                                    esclusivamente con
                                    il
                                    consenso dell'utente o in base ad altre basi legali previste dal GDPR.
                                </p>
                            </section>

                            <section>
                                <h2>4. Conservazione dei Dati</h2>
                                <p>
                                    I tuoi dati personali saranno conservati per il tempo strettamente necessario a
                                    soddisfare le
                                    finalità indicate o come richiesto dalla legge.
                                </p>
                            </section>

                            <section>
                                <h2>5. Condivisione dei Dati</h2>
                                <p>
                                    Condividiamo i dati personali con fornitori terzi per l'elaborazione delle
                                    transazioni, le
                                    spedizioni e per obblighi legali.
                                </p>
                            </section>

                            <section>
                                <h2>6. Diritti dell'Interessato</h2>
                                <p>
                                    Ai sensi del GDPR, hai il diritto di accedere, rettificare, cancellare e limitare il
                                    trattamento
                                    dei
                                    tuoi dati personali. Per esercitare questi diritti, contattaci all'indirizzo
                                    linkinpark@assistenza.it.
                                </p>
                            </section>

                            <section>
                                <h2>7. Cookie e Tecnologie di Tracciamento</h2>
                                <p>
                                    Utilizziamo i cookie per migliorare l'esperienza utente e per analizzare il
                                    traffico.
                                </p>
                            </section>

                            <section>
                                <h2>8. Sicurezza dei Dati</h2>
                                <p>
                                    Adottiamo misure tecniche e organizzative per proteggere i dati personali, in
                                    conformità
                                    all'Articolo 32 del GDPR.
                                </p>
                            </section>

                            <section>
                                <h2>9. Modifiche all'Informativa</h2>
                                <p>
                                    La presente informativa può essere aggiornata periodicamente. Ti consigliamo di
                                    verificare
                                    regolarmente gli aggiornamenti su questa pagina.
                                </p>
                            </section>

                            <section>
                                <h2>10. Contatti e Reclami</h2>
                                <p>
                                    Per domande o reclami, contattaci all'indirizzo wishbone@assistenza.it. Se ritieni
                                    che i tuoi
                                    diritti siano stati
                                    violati, hai il diritto di rivolgerti al Garante per la protezione dei dati
                                    personali.
                                </p>
                            </section>
                        </div>
                    </div>

                    <!-- Modale Termini di Servizio -->
                    <div id="termsModal" class="modal" onclick="closeModalOutside(event, 'termsModal')">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal('termsModal')">&times;</span>
                            <section>
                                <h2>1. Accettazione dei Termini</h2>
                                <p>
                                    Utilizzando il nostro sito web, accetti i presenti Termini e Condizioni, applicabili
                                    a tutti gli
                                    utenti che visitano o effettuano acquisti su Linkin Park. Se non accetti i termini,
                                    ti invitiamo
                                    a non utilizzare il sito.
                                </p>
                            </section>

                            <section>
                                <h2>2. Servizi Offerti</h2>
                                <p>
                                    Linkin Park offre ai fan della nostra band la possibilità di acquistare prodotti
                                    ufficiali,
                                    come
                                    abbigliamento e accessori, e di prenotare biglietti per le date del tour. Tutti i
                                    prodotti e i
                                    biglietti sono soggetti a disponibilità e possono essere modificati senza preavviso.
                                </p>
                            </section>

                            <section>
                                <h2>3. Condizioni di Acquisto</h2>
                                <p>
                                    Gli acquisti effettuati su questo sito sono vincolati alla disponibilità dei
                                    prodotti. Al
                                    completamento dell'acquisto, riceverai una conferma via email con i dettagli
                                    dell'ordine. Per i
                                    biglietti, assicurati di conservare la conferma, che sarà richiesta per l'ingresso
                                    agli eventi.
                                </p>
                            </section>

                            <section>
                                <h2>4. Politica di Reso e Rimborso</h2>
                                <p>
                                    Se desideri restituire un prodotto acquistato, puoi contattare il nostro servizio
                                    clienti entro
                                    14
                                    giorni dalla consegna. I biglietti per gli eventi, tuttavia, non sono rimborsabili,
                                    salvo
                                    cancellazione o modifiche dell'evento.
                                </p>
                            </section>

                            <section>
                                <h2>5. Modifiche ai Termini e Servizi</h2>
                                <p>
                                    Linkin Park si riserva il diritto di modificare questi Termini e Servizi in
                                    qualsiasi
                                    momento.
                                    Le modifiche verranno comunicate sul sito e, se rilevanti, tramite email agli utenti
                                    registrati.
                                </p>
                            </section>

                            <section>
                                <h2>6. Contatti</h2>
                                <p>
                                    Per qualsiasi domanda, contatta il nostro servizio clienti all'indirizzo email:
                                    linkinpark@assistenza.it.
                                </p>
                            </section>
                        </div>
                    </div>

                    <button type="submit">Registrati</button>
                </form>
            </div>
        </div>

    </main>

    <script src="js/registration.js"></script>

</body>

</html>