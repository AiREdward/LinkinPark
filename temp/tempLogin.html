<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="linkins">
    <meta name="description" content="TODO">
    <meta name="keywords" content="TODO">
    <meta name="viewport" content="width=device-width">

    <title>Accedi</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/login.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <div class="main-container">
        
        <header>
            <h1>Accedi</h1>
        </header>
        
        <!-- Sezione per i messaggi di errore -->
        <div id="error-message" class="error"></div>

        <form action="php/login.php" method="post">
            <label for="email">Email:</label>
            <div class="input-container">
                <input type="email" id="email" name="email" required placeholder="Inserisci la tua email"
                    class="input-with-icon">
                <i class="fa-solid fa-envelope input-icon"></i>
            </div>

            <label for="password">Password:</label>
            <div class="input-container">
                <input type="password" id="password" name="password" required placeholder="Inserisci la tua password"
                    class="input-with-icon">
                <i class="fa-solid fa-lock input-icon"></i>
                <i id="togglePassword" class="fa-solid fa-eye icon-right"></i>
            </div>

            <input type="hidden" name="redirect" id="redirect" value="">

            <button type="submit">Accedi</button>
        </form>

        <p>Non hai un account? <a href="registration.html">Registrati qui</a></p>
    </div>

    <script>
        const passwordField = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        // Evento per alternare la visibilità della password e cambiare icona
        togglePassword.addEventListener('click', () => {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Cambia l'icona in base alla visibilità della password
            togglePassword.classList.toggle('fa-eye');
            togglePassword.classList.toggle('fa-eye-slash');
        });

        // Recupera il parametro "redirect" dall'URL e lo inserisce nel campo nascosto
        const params = new URLSearchParams(window.location.search);
        const redirect = params.get('redirect');
        if (redirect) {
            document.getElementById('redirect').value = redirect;
        }

        // Visualizza il messaggio di errore
        const errorMessage = document.getElementById('error-message');
        const error = params.get('error');
        if (error) {
            switch (error) {
                case 'bloccato':
                    errorMessage.textContent = 'Il tuo account è bloccato. Contatta l\'amministratore.';
                    break;
                case 'password':
                    errorMessage.textContent = 'Password errata. Riprova.';
                    break;
                case 'utente':
                    errorMessage.textContent = 'Utente non trovato. Registrati.';
                    break;
                default:
                    errorMessage.textContent = 'Si è verificato un errore. Riprova.';
            }
        }
    </script>

</body>

</html>
