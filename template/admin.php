<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../accedi.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta author="linkins">
    <meta name="description" content="Dashboard Admin per la gestione utenti, statistiche delle vendite e gestione delle date dei tour. Accesso rapido e funzionalità avanzate per amministratori.">
    <meta name="keywords" content="Admin Dashboard, gestione utenti, statistiche vendite, gestione tour, pannello di controllo, amministrazione, transazioni, statistiche, utenti, tour, gestione ecommerce">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Linkin Park</title>
    <link rel="icon" href="../asset/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../asset/css/style.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <h1 lang="en">Admin Dashboard</h1>
        <button id="hamburger-menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>

    <!-- Navbar -->
    <nav id="menu">
        <ul>
            <li><a id="userManagementBtn">Gestione Utenti</a></li>
            <li><a id="venditeBtn">Statistiche</a></li>
            <li><a id="dateTourBtn">Gestione <span lang="en">Tour</span></a></li>
            <li><a id="logoutBtn" lang="en">Logout</a></li>
        </ul>
    </nav>

    <!-- Contenuto principale -->
    <main>

        <div id="content" class="content">
            <!-- Gestione Utenti -->
            <div id="userManagement">
                <h2>Gestione Utenti</h2>
                <form id="searchForm">
                    <label for="email">Cerca utente per <span lang="en">email</span>:</label>
                    <div class="input-container">
                        <input type="email" name="email" id="email" placeholder="Inserisci email utente" required autocomplete="email">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <button type="submit">Cerca</button>
                </form>

                <div id="result"></div>
            </div>

            <!-- Statistiche -->
            <div id="vendite">
                <h2>Statistiche delle Transazioni</h2>
                <div class="stats">
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-dollar-sign"></i></div>
                        <div>
                            <h3 class="stat-title">Totale Guadagno</h3>
                            <p class="stat-value" id="totalRevenue">€0.00</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <h3 class="stat-title">Numero di Transazioni</h3>
                            <p class="stat-value" id="totalTransactions">0</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                        <div>
                            <h3 class="stat-title">Articolo più Acquistato</h3>
                            <p class="stat-value" id="mostBoughtProduct">-</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour -->
            <div id="tour">

                <h2>Gestione <span lang="en">Tour</span></h2>

                <button id="addEventBtn">Aggiungi Evento</button>

                <div id="result2"></div>

                <form id="searchForm2" action="" method="GET">
                    <label for="search2">Cerca evento per data:</label>
                    <input 
                        type="date" 
                        id="search2" 
                        name="search2" 
                       
                        placeholder="Scrivere nel formato: AAAA-MM-GG" 
                        pattern="\d{4}-\d{2}-\d{2}"
                    
                        required>
                    <button type="submit">Cerca</button>
                </form>

                <div id="result3"></div>

                <div id="eventOptions">
                    <button id="deleteEventBtn">Cancella Evento</button>
                    <button id="cancelBtn">Annulla</button>
                </div>
            </div>

        </div>
    </main>

    <script src="../js/admin.js"></script>
</body>

</html>