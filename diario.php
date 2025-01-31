<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Il Nostro Viaggio - Linkin Park</title>
    <meta name="keywords" content="linkin park,linkin park storia,chester bennington,hybrid theory,xero band,one more light,grammy linkin park,live in texas,
        meteora album,emily armstrong,colin brittain,band alternative rock">
    <meta name="description" content="Ripercorri i momenti salienti della carriera dei Linkin Park, dal 1996 al 2024.">
    <meta name = "author" content = "Linkins">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="asset/css/style.css" media="all">
    <link rel="stylesheet" href="asset/css/stampa.css" media="print">
    <script src="js/diario.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

    <?php
        $breadcrumb = [
            ['name' => 'Home', 'url' => 'index.php'],
            ['name' => 'Diario', 'url' => 'diario.php']
        ];
        include 'includes/menu.php'; 
    ?>

    <main>
        <h1><span lang="en">Linkin Park</span>: Il Nostro Viaggio</h1>

        <dl id = "storia">
            <dt class="short-article"><time datetime="1996">1996</time></dt>
            <dd id='item1' tabindex="0">
                <img src="asset/img/diario/xero.webp" alt=""> <!--aggiungere q.sa che dice che questo e' la prima foto della band Xero con la composizione iniziale-->
                <p>Prima di diventare <span lang="en">Linkin Park</span>, abbiamo formato <span lang="en">Xero</span>: un gruppo di ragazzi con 
                    tanta passione, pochi mezzi e un sogno enorme. Era l'inizio di un viaggio che non immaginavamo ci avrebbe portato così lontano.</p>
            </dd>

            <dt class="long-article"><time datetime="1999">1999</time></dt>
            <dd id='item2' tabindex="0">
                <img src="asset/img/diario/articolo1 prima foto.webp" alt="Una delle prime foto di Linkin Park con i suoi membri.">
                <p>Nel 1999 eravamo ancora un gruppo che cercava di capire cosa fare della propria vita. Ci chiamavamo <span lang="en">Xero</span>
                (sì, lo sappiamo, non proprio il nome più ispirato di sempre)...<a href="#article2" class="readMore">scopri di più</a></p>
            </dd>

            <dt class="long-article"><time datetime="2000">2000</time></dt>
            <dd id='item3' tabindex="0">
                <img src="asset/img/diario/LP vecchia composizione.webp" alt="Foto dei membri di Linkin Park seduti in una piscina vuota.">
                <p>Parliamoci chiaro: quando abbiamo iniziato a lavorare su <span lang="en">Hybrid Theory</span>, non avevamo idea di cosa stessimo facendo. 
                    Sapevamo solo che avevamo un sacco di idee, un <span lang="en">budget</span> minuscolo...<a href="#article3" class="readMore">scopri di più</a></p>
            </dd>

            <dt class="short-article"><time datetime="2002">2002</time></dt>
            <dd id='item4' tabindex="0">
                <img src="asset/img/diario/grammy 2002.webp" alt="I Linkin Park posano con un Grammy tenuto da Chester.">
                <p>Nel 2002, abbiamo conquistato il <span lang="en">Grammy</span> per la Miglior <span lang="en">Performance Hard Rock</span> con 
                    <span lang="en">Crawling</span>. Ci avete mostrato che la nostra passione e innovazione musicale non passano inosservate.</p>
            </dd>

            <dt class="long-article"><time datetime="2004">2004</time></dt>
            <dd id='item5' tabindex="0">
                <img src="asset/img/diario/articolo3_live_in_texas.webp" alt="Copertina di Linkin Park Live in Texas, braccio alzato tra la folla.">
                <p>Abbiamo sempre amato suonare dal vivo. C’è qualcosa di magico in quei momenti sul palco: l’adrenalina, il pubblico che canta 
                    a squarciagola, la connessione unica che si crea...<a href="#article5" class="readMore">scopri di più</a></p>
            </dd>

            <dt class="long-article"><time datetime="2017">2017</time></dt>
            <dd id='item6' tabindex="0">
                <img src="asset/img/diario/articolo4 chester foto2.webp" alt="Il ritratto di Chester che canta dal vivo con tanta energia.">
                <p>Il 20 luglio 2017 è stato il giorno più buio della nostra vita. <span lang="en">Chester</span>, il nostro amico, fratello, anima
                    e voce, ci ha lasciati. È impossibile descrivere quanto ha significato per noi...<a href="#article6" class="readMore">scopri di più</a></p>
            </dd>

            <dt class="long-article"><time datetime="2024">2024</time></dt>
            <dd id='item7' tabindex="0">
                <img src="asset/img/diario/LP riunione articolo5.webp" alt="Band seduta su un divano in studio con palco illuminato sullo sfondo.">
                <p>Dopo la perdita di <span lang="en">Chester</span>, abbiamo passato un periodo difficile, ma ora finalmente siamo pronti per un 
                    nuovo inizio con <span lang="en">Emily</span> e <span lang="en">Colin</span>. Quando ci siamo incontrati per la prima 
                    volta...<a href="#article7" class="readMore">scopri di più</a></p>
            </dd>
        </dl>

        
        <article id="article2" tabindex="-1">
            <h2>L’arrivo di <span lang="en">Chester</span> e il nuovo nome</h2>
            <button type="button" class="closePopUp">X</button>

            <img src="asset/img/diario/articolo1 prima foto.webp" alt="">  <!--aggiungere q.sa che dice che questo e' la prima foto della band Xero con la composizione iniziale-->
            <p>Nel 1999 eravamo ancora un gruppo che cercava di capire cosa fare della propria vita. Ci chiamavamo <span lang="en">Xero</span>
                (sì, lo sappiamo, non proprio il nome più ispirato di sempre), e la nostra musica aveva un grande potenziale.</p>
            <p>Poi è arrivato <span lang="en">Chester Bennington</span>. Con la sua voce capace di passare in un attimo da urla potenti a toni dolci e malinconici,
                <span lang="en">Chester</span> ha portato un’energia completamente nuova al gruppo. Ma non è stato un “incontro casuale” in stile film romantico:
                avevamo mandato demo in lungo e in largo cercando un cantante, e <span lang="en">Chester</span> era uno dei pochi che aveva risposto. Non solo: 
                per registrare l’audizione, <span lang="en">Chester</span> aveva lasciato un barbecue in pieno svolgimento. Dite quello che volete, ma abbandonare 
                la griglia per un sogno è pura dedizione!</p>
            <p>Una volta che Chester si è unito a noi, sapevamo che stavamo per iniziare un nuovo capitolo. E un nuovo capitolo
                richiedeva un nuovo nome. Dopo aver fatto <span lang="en">brainstorming</span> su idee che non vi racconteremo mai (fidatevi, erano terribili), 
                ci siamo ispirati a <span lang="en">Lincoln Park</span>, un posto a <span lang="en">Santa Monica</span> dove alcuni di noi passavano il tempo. Ovviamente, cambiare "<span lang="en">Lincoln</span>" 
                in "<span lang="en">Linkin</span>" è stata una mossa obbligata per poter comprare il dominio web. Ah, le priorità di fine anni ’90!</p>
        </article>

        <article id="article3" tabindex="-1">
            <h2>La nascita di <span lang="en">Hybrid Theory</span>: sudore, sogni e un pizzico di magia</h2>
            <button type="button" class="closePopUp">X</button>

            <img src="asset/img/diario/LP vecchia composizione.webp" alt="Foto dei membri di Linkin Park seduti in una piscina vuota.">
            <p>Parliamoci chiaro: quando abbiamo iniziato a lavorare su <span lang="en">Hybrid Theory</span>, non avevamo idea di cosa stessimo facendo. Sapevamo 
                solo che avevamo un sacco di idee, un <span lang="en">budget</span> minuscolo e un’enorme voglia di farcela. Eravamo giovani, affamati e determinati
                a creare qualcosa che nessuno aveva mai sentito prima.</p>
            <p>Le sessioni di registrazione? Un <span lang="en">mix</span> di entusiasmo e caos totale. <span lang="en">Mike</span> passava ore a sperimentare con campionamenti e <span lang="en">beat</span> sul 
                suo vecchio computer, mentre <span lang="en">Chester</span> metteva ogni briciolo di anima nella voce. <span lang="en">Brad</span> e <span lang="en">Rob</span>? Instancabili. Ci sono stati momenti 
                in cui pensavamo: “Ragazzi, ma è troppo strano, la gente non capirà mai!” Eppure, ogni volta che riascoltavamo i brani, 
                sentivamo che c’era qualcosa di speciale.</p>
            <img src="asset/img/diario/articolo2_foto1.webp" alt="Chester canta sul palco davanti a una folla enorme in uno stadio.">
            <p>Quando finalmente abbiamo finito l’album e lo abbiamo chiamato <span lang="en">Hybrid Theory</span>, non sapevamo davvero cosa aspettarci. Quando è 
                uscito, il 24 ottobre 2000, il nostro mondo è letteralmente esploso. Brani come <span lang="en">Crawling</span>, <span lang="en">One Step Closer</span> e <span lang="en">In the End</span> hanno 
                iniziato a farsi strada nelle radio e nei cuori delle persone. Ogni giorno ricevevamo notizie incredibili: dischi venduti, 
                concerti <span lang="en">sold out</span>, fan da ogni angolo del pianeta che cantavano le nostre canzoni come se fossero loro.</p>
            <p>Ricordiamo ancora quando abbiamo saputo che <span lang="en">Hybrid Theory</span> era diventato uno degli album più venduti del nuovo millennio. 
                Non riuscivamo a crederci. Era come se tutte quelle notti insonni, le discussioni e i momenti di dubbio avessero finalmente 
                avuto un senso.</p>
        </article>

        <article id="article5" tabindex="-1">
            <h2>Il delirio di <span lang="en">Live in Texas</span>: quando il palco è diventato casa</h2>
            <button type="button" class="closePopUp">X</button>

            <img src="asset/img/diario/articolo3_live_in_texas.webp" alt="Copertina di Linkin Park Live in Texas, braccio alzato tra la folla.">
            <p>Abbiamo sempre amato suonare dal vivo. C’è qualcosa di magico in quei momenti sul palco: l’adrenalina, il pubblico che canta 
                a squarciagola, la connessione unica che si crea. Quindi, nel 2003, durante il nostro tour per <span lang="en">Meteora</span>, abbiamo deciso di 
                catturare quell’energia in un <span lang="en">album live</span>. E così è nato <span lang="en">Live in Texas</span>.</p>
            <p>Registrarlo è stato… intenso. Due concerti in <span lang="en">Texas</span>, uno a <span lang="en">Houston</span> e uno a <span lang="en">Irving</span>, con un pubblico scatenato e una produzione 
                gigantesca. Immaginatevi noi che corriamo su e giù per il palco, sudati e carichi di adrenalina, mentre le telecamere catturano 
                ogni singolo momento. <span lang="en">Chester</span> che urla come se non ci fosse un domani, <span lang="en">Mike</span> che incita la folla, <span lang="en">Rob</span> che pesta sulla batteria 
                come un martello pneumatico – insomma, eravamo in modalità "massima potenza".</p>
            <p>Quando è arrivato il momento di mettere tutto insieme, abbiamo scelto con cura le tracce migliori, mescolando i nostri successi 
                di <span lang="en">Hybrid Theory</span> e <span lang="en">Meteora</span>. E poi, perché non farci un regalo <span lang="en">extra</span>? Abbiamo incluso un DVD con le immagini del concerto, così 
                chiunque potesse sentirsi parte di quella folla texana impazzita.</p>
        </article>

        <article id="article6" tabindex="-1">
            <h2>Un addio che non dimenticheremo mai: <span lang="en">Chester</span> e <span lang="en">One More Light Live</span></h2>
            <button type="button" class="closePopUp">X</button>

            <img src="asset/img/diario/articolo4 chester foto2.webp" alt="Il ritratto di Chester che canta dal vivo con tanta energia.">
            <p>Il 20 luglio 2017 è stato il giorno più buio della nostra vita. <span lang="en">Chester</span>, il nostro amico, fratello, anima e voce, ci ha lasciati. 
            È impossibile descrivere quanto ha significato per noi, non solo come artista, ma come persona. La sua energia, la sua risata 
            contagiosa, il modo in cui riusciva a trovare sempre la cosa giusta da dire… tutto questo lo rendeva speciale.</p>
            <p>La notizia ci ha colpiti come un fulmine. Eravamo devastati, persi. E mentre cercavamo di fare i conti con il vuoto che aveva 
            lasciato, c’era una cosa che continuava a tornare: <span lang="en">Chester</span> viveva per la musica. Amava il palco, amava cantare, e soprattutto 
            amava i fan. Sapevamo che il modo migliore per onorarlo era quello di celebrare ciò che lui aveva dato al mondo.</p>
            <img src="asset/img/diario/chester foto4 one_more_light.webp" alt="Chester sul palco di notte con luci del pubblico e mani alzate.">
            <p>Così è nato <span lang="en">One More Light Live</span>. Questo album live è stato registrato durante il nostro tour del 2017, poche settimane prima 
            che <span lang="en">Chester</soan> ci lasciasse. Ogni canzone, ogni nota, è intrisa della sua passione e del suo cuore. Ascoltarlo è come avere <span lang="en">Chester</span> 
            di nuovo accanto a noi, anche solo per un momento.</p>
            <p><span lang="en">Chester</span> ci ha lasciati troppo presto, ma il suo spirito vive in ogni canzone, in ogni coro urlato a pieni polmoni, in ogni momento 
            in cui qualcuno trova forza nella sua musica. Non smetteremo mai di amarlo, e non smetteremo mai di ringraziarlo per aver condiviso 
            con noi la sua luce.</p>
        </article>

        <article id="article7" tabindex="-1">
            <h2>Il nuovo capitolo con <span lang="en">Emily Armstrong</span> e <span lang="en">Colin Brittain</span></h2>
            <button type="button" class="closePopUp">X</button>

            <img src="asset/img/diario/LP riunione articolo5.webp" alt="Band seduta su un divano in studio con palco illuminato sullo sfondo.">
            <p>Dopo la perdita di <span lang="en">Chester</span>, abbiamo passato un periodo difficile, ma ora finalmente siamo pronti per un nuovo inizio con <span lang="en">Emily</span> 
            e <span lang="en">Colin</span>.</p>
            <p>Quando ci siamo incontrati per la prima volta con <span lang="en">Emily</span>, c'è stata subito una connessione speciale. La sua energia, la sua passione 
            e, ovviamente, quella voce che ti travolge come un uragano. E poi c'è <span lang="en">Colin Brittain</span>, un produttore e musicista di talento che ha 
            portato una nuova prospettiva e una ventata d'aria fresca alla nostra musica.</p>
            <img src="asset/img/diario/reunion concert articolo5.webp" alt="I Linkin Park si esibiscono con due nuovi membri.">
            <p>Per chi non lo sapesse, <span lang="en">Emily</span> è stata la <span lang="en">frontwoman</span> dei <span lang="en">Dead Sara</span> e ha collaborato con artisti del calibro di <span lang="en">Beck</span> e <span lang="en">Demi Lovato</span>. 
            Sul palco è una forza della natura: potente, sincera, e con un carisma che cattura l'attenzione di tutti. Non potevamo immaginare 
            un'aggiunta migliore ai <span lang="en">Linkin Park</span>. <span lang="en">Colin</span>, dal canto suo, ha lavorato con <span lang="en">band</span> come <span lang="en">Papa Roach</span> e <span lang="en">5 Seconds of Summer</span>, portando 
            la sua esperienza e il suo stile unico nel nostro mondo.</p>
            <p>Il nostro ritorno sul palco dopo la pausa di sette anni è stato emozionante. Durante il nostro concerto a <span lang="en">Los Angeles</span>, <span lang="en">Emily</span> e 
            <span lang="en">Colin</span> hanno conquistato il pubblico fin dalla prima nota. Cantare insieme a loro è stato come riscoprire le nostre stesse canzoni. 
            E vi assicuriamo, il meglio deve ancora venire!</p>
        </article>

        <div class="overlay"></div>

        <?php include 'includes/scrollToTop.php'; ?>

    </main>

    <?php include 'includes/footer.php'; ?>
    
</body>

</html>