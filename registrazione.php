<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="linkins">
    <meta name="description" content="Crea un account sul nostro sito per accedere a tutte le funzionalità. Compila il modulo di registrazione in modo rapido e sicuro.">
    <meta name="keywords" content="registrazione account, crea account, registrati online, registrazione sicura, modulo di registrazione, accesso account, registrazione sito web">
    <meta name="viewport" content="width=device-width">

    <title>Registrati</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/style.css" media="screen">
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
                        <input type="password" id="password" name="password" required placeholder="Inserisci la tua password" oninput="checkPasswordStrength()">
                        <div class="password-strength">
                            <div id="strength-bar"></div>
                        </div>
                    </div>
        
                    <div class="input-container full-width">
                        <label for="conferma-password">Conferma Password:</label>
                        <input type="password" id="conferma-password" name="conferma-password" required placeholder="Conferma la tua password">
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
                        <input type="text" id="indirizzo" name="indirizzo" required placeholder="Inserisci il tuo indirizzo">
                    </div>
        
                    <div class="input-container">
                        <label for="telefono">Telefono:</label>
                        <input type="tel" id="telefono" name="telefono" required placeholder="Inserisci il tuo telefono">
                    </div>
        
                    <div class="input-container full-width">
                        <label for="data_nascita">Data di Nascita:</label>
                        <input type="date" id="data_nascita" name="data_nascita">
                    </div>
        
                    <div class="checkbox-container full-width">
                        <label>
                            <input type="checkbox" id="privacy" name="privacy" required> Accetto la <a href="#">Privacy Policy</a>.
                        </label>
                    </div>
        
                    <div class="checkbox-container full-width">
                        <label>
                            <input type="checkbox" id="termini" name="termini" required> Accetto i <a href="#">Termini di Servizio</a>.
                        </label>
                    </div>
        
                    <button type="submit">Registrati</button>
                </form>
            </div>
        </div>

    </main>

    <script src="js/registration.js"></script>

</body>

</html>