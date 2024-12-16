<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta author="linkins">
    <meta name="description" content="TODO">
    <meta name="keywords" content="TODO">
    <meta name="viewport" content="width=device-width">

    <title>Accedi</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/style.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .main-container {
            justify-content: center;
            align-items: center;
            width: 350px;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2),
                0 1px 3px rgba(0, 0, 0, 0.1);
            color: #000;
        }

        form label,
        form input,
        form button {
            display: block;
            width: 100%;
            margin: 10px 0;
            box-sizing: border-box;
        }

        input,
        button {
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
        }

        input {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .input-container {
            position: relative;
        }

        .input-with-icon {
            padding-left: 30px;
        }

        .input-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.5;
        }

        .icon-right {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        a {
            color: #80d4ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="main-container">
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
