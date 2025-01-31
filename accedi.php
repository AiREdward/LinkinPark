<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="linkins">
    <meta name="description" content="Accedi al tuo account per continuare a esplorare tutte le funzionalità del nostro sito. Inserisci email e password per un accesso sicuro e rapido.">
    <meta name="keywords" content="accedi, login, accesso account, entra nel tuo account, accedi online, accesso sicuro, login utente, pagina di accesso, autenticazione">
    <meta name="viewport" content="width=device-width">

    <title>Accedi - Linkin Park</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/style_function.css" media="all">
    <link rel="stylesheet" href="asset/css/stampa.css" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <main>
        <div class="main-container">
            <!-- Left Section -->
            <div class="left-section">
                <h1>Ciao!</h1>
                <p>Accedi per continuare a esplorare tutte le funzionalità del nostro sito.</p>
                <p>Non hai un account? <a href="registrazione.php">Registrati qui</a></p>
                <p>Torna alla <a href="index.php"><span lang="en">Home</span></a></p>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <h1 class="title">Accedi</h1>

                <!-- Sezione per i messaggi di errore -->
                <div id="error-message" class="error"></div>

                <form action="php/login.php" method="post">
                    <div class="input-container full-width">
                        <label for="login">Email o Username:</label>
                        <input type="text" id="login" name="login" required placeholder="Inserisci email o username" class="input" autocomplete="username">
                    </div>

                    <div class="input-container full-width">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required
                            placeholder="Inserisci la tua password" class="input-with-icon" autocomplete="current-password">
                        <i id="togglePassword" class="fa-solid fa-eye icon-right"></i>
                    </div>

                    <input type="hidden" name="redirect" id="redirect" value="">

                    <button type="submit">Accedi</button>
                </form>
            </div>
        </div>
    </main>

    <script src="js/login.js"></script>
</body>

</html>