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
    <main>

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
                    <input type="password" id="password" name="password" required
                        placeholder="Inserisci la tua password" class="input-with-icon">
                    <i class="fa-solid fa-lock input-icon"></i>
                    <i id="togglePassword" class="fa-solid fa-eye icon-right"></i>
                </div>

                <input type="hidden" name="redirect" id="redirect" value="">

                <button type="submit">Accedi</button>
            </form>

            <p>Non hai un account? <a href="registration.html">Registrati qui</a></p>
        </div>
        
    </main>

    <script src="js/login.js"></script>

</body>

</html>