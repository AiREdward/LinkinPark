<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="linkins">
    <meta name="description" content="TODO">
    <meta name="keywords" content="TODO">
    <meta name="viewport" content="width=device-width">

    <title>Registrati</title>

    <link rel="icon" href="asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/login.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 20px;
        }

        .icon-button.left {
            position: absolute;
            left: 20px;
        }

        .icon-button.right {
            position: absolute;
            right: 40px;
        }

        .icon-button {
            background-color: transparent;
            color: #4CAF50;
            border: 2px solid #4CAF50;
            border-radius: 50%;
            padding: 12px;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .icon-button i {
            font-size: 1.5em;
        }

        .icon-button:hover {
            background-color: #4CAF50;
            color: white;
        }

        .icon-button:focus {
            outline: none;
        }

        .step-container {
            display: none;
        }

        .step-container.active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <header>
            <h1>Registrati</h1>
        </header>

        <form action="php/registration.php" method="post" onsubmit="return validateForm()">
            <div id="step-1" class="step-container active">
                <label for="email">Email:</label>
                <div class="input-container">
                    <input type="email" id="email" name="email" required placeholder="Inserisci la tua email" aria-required="true">
                </div>

                <label for="password">Password:</label>
                <div class="input-container">
                    <input type="password" id="password" name="password" required oninput="checkPasswordStrength()" placeholder="Inserisci la tua password" aria-required="true" aria-describedby="passwordHint">
                    <div class="password-strength" aria-live="polite">
                        <div id="strength-bar" role="progressbar" aria-labelledby="password-strength-label"></div>
                    </div>
                    <small id="passwordHint">La password deve contenere almeno 8 caratteri, una maiuscola, una minuscola, un numero e un carattere speciale.</small>
                </div>

                <label for="conferma-password">Conferma Password:</label>
                <div class="input-container">
                    <input type="password" id="conferma-password" name="conferma-password" required placeholder="Conferma la tua password" class="input-with-icon" aria-required="true" aria-describedby="confirmPasswordHint">
                    <i class="fa-solid fa-lock input-icon"></i>
                    <i id="toggleConfirmPassword" class="fa-solid fa-eye icon-right" role="button" aria-label="Mostra/Nascondi la password"></i>
                </div>
                <small id="confirmPasswordHint">Assicurati che la password e la conferma siano identiche.</small>

                <div class="button-container">
                    <button type="button" onclick="nextStep(2)" class="icon-button right" aria-label="Passa al passo successivo">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div id="step-2" class="step-container">
                <label for="nome">Nome:</label>
                <div class="input-container">
                    <input type="text" id="nome" name="nome" required placeholder="Inserisci il tuo nome" aria-required="true">
                </div>

                <label for="cognome">Cognome:</label>
                <div class="input-container">
                    <input type="text" id="cognome" name="cognome" required placeholder="Inserisci il tuo cognome" aria-required="true">
                </div>

                <label for="indirizzo">Indirizzo:</label>
                <div class="input-container">
                    <input type="text" id="indirizzo" name="indirizzo" required placeholder="Inserisci il tuo indirizzo" aria-required="true">
                </div>

                <label for="telefono">Telefono:</label>
                <div class="input-container">
                    <input type="tel" id="telefono" name="telefono" oninput="validatePhone()" required placeholder="Inserisci il tuo telefono" aria-required="true" aria-describedby="telefono-error">
                    <small id="telefono-error" style="color: red; display: none;" role="alert">Inserisci solo caratteri numerici.</small>
                </div>

                <label for="data_nascita">Data di Nascita:</label>
                <div class="input-container">
                    <input type="date" id="data_nascita" name="data_nascita" aria-label="Inserisci la tua data di nascita">
                </div>

                <div class="button-container">
                    <button type="button" onclick="previousStep(1)" class="icon-button" aria-label="Passa al passo precedente">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <button type="button" onclick="nextStep(3)" class="icon-button" aria-label="Passa al passo successivo">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div id="step-3" class="step-container">
                <div class="checkbox-container">
                    <label>
                        <input type="checkbox" id="privacy" name="privacy" required aria-required="true">
                        Accetto la <a href="#" onclick="openModal('privacyModal')" aria-label="Leggi la Privacy Policy">Privacy Policy</a>.
                    </label>
                </div>

                <div class="checkbox-container">
                    <label>
                        <input type="checkbox" id="termini" name="termini" required aria-required="true">
                        Accetto i <a href="#" onclick="openModal('termsModal')" aria-label="Leggi i Termini di Servizio">Termini di Servizio</a>.
                    </label>
                </div>

                <button type="submit" aria-label="Completa la registrazione">Registrati</button>

                <div class="button-container">
                    <button type="button" onclick="previousStep(2)" class="icon-button" aria-label="Passa al passo precedente">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="js/registration.js"></script>
    <script>

        const passwordField = document.getElementById('conferma-password');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

        toggleConfirmPassword.addEventListener('click', () => {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            toggleConfirmPassword.classList.toggle('fa-eye');
            toggleConfirmPassword.classList.toggle('fa-eye-slash');
        });

        function nextStep(step) {
            document.getElementById('step-' + (step - 1)).classList.remove('active');
            document.getElementById('step-' + step).classList.add('active');
        }

        function previousStep(step) {
            document.getElementById('step-' + (step + 1)).classList.remove('active');
            document.getElementById('step-' + step).classList.add('active');
        }

    </script>
</body>

</html>
