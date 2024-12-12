<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    footer {
        background-color: #111;
        color: #fff;
        padding: 40px 20px;
        font-family: 'Arial', sans-serif;
    }

    footer a {
        margin-right: 10px; 
        color: #aaa; 
        text-decoration: none;
    }

    .footerContainer {
        max-width: 1200px; 
        margin: 0 auto; 
        display: grid; 
        grid-template-columns: 
        repeat(3, 1fr); 
        gap: 20px;
    }
    
    .footerContainer h3 {
        font-size: 18px; 
        color: #fff;
    }

    .imgValidCode {
        width: 50px;
        height: auto;
        vertical-align: middle;
        margin-right: 15px;
    }

    .social i {
        font-size: 24px; 
        margin-right: 8px;
    }
    
</style>

<footer>
    <div class="footerContainer">
        
        <!-- Sezione Logo e Descrizione -->
        <div style="min-width: 250px;">
            <h3>Linkin Park</h2>
            <p style="color: #aaa; line-height: 1.6;">
                Iconica band che combina rock e innovazione. Scopri musica senza tempo e resta aggiornato sulle novità!
            </p>
        </div>

        <!-- Social Media -->
        <div style="min-width: 200px;">
            <h3>Seguici</h3>
            <div class="social">
                <a href="https://www.instagram.com/linkinpark/" target="_blank">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <br>
                <a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q" target="_blank">
                    <i class="fab fa-youtube"></i> YouTube
                </a>
                <br>
                <a href="https://open.spotify.com/intl-it/artist/6XyY86QOPPrYVGvF9ch6wz" target="_blank">
                    <i class="fab fa-spotify"></i> Spotify
                </a>
                <br>
                <a href="https://music.apple.com/it/artist/linkin-park/148662" target="_blank">
                    <i class="fab fa-apple"></i> Apple Music
                </a>
            </div>
        </div>

        <!-- Sezione Contatti -->
        <div style="text-align: center; margin-top: 20px;">
            <h3>Hai bisogno di aiuto?</h3>
            <a href="mailto:support@linkinpark.com" style="color: #aaa; text-decoration: none;">Contatta il Supporto</a>
        </div>

    </div>

    <!-- Sezione Certificati di Sicurezza e Privacy -->
    <div style="text-align: center; padding-top: 20px; border-top: 1px solid #333; margin-top: 20px;">
        <div style="color: #aaa; font-size: 14px;">
            <p>&copy; 2024 Linkin Park. Tutti i diritti riservati.</p>
        </div>
        <div style="margin-top: 10px; color: #aaa;">
            <p>Questo sito rispetta gli standard di sicurezza di <strong>W3C</strong>.</p>
            <div>
                <img class="imgValidCode" src="asset/img/codice_valido/valid-xhtml10.png" alt="W3C HTML5">
                <img class="imgValidCode" src="asset/img/codice_valido/vcss-blue.gif" alt="W3C CSS">
                <img class="imgValidCode" src="asset/img/codice_valido/pci-dss.png" alt="PCI DSS Compliant">
            </div>
        </div>
    </div>
</footer>
