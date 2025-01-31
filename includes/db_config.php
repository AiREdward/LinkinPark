<?php

// Connessione locale

$servername = "localhost";
$username = "root";
$password = ""; // Inserisci la tua password
$dbname = "lp_db";

// Connessione Paolotti

// $servername = "localhost";
// $username = "amio";
// $password = "Ne6aesahv8cooxav";
// $dbname = "amio";


try {
    // Creazione della connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controllo errori
    if ($conn->connect_error) {
        throw new Exception("Errore di connessione al database: " . $conn->connect_error);
    }
} catch (Exception $e) {

    header("Location: ../template/error.html?error=db_unreachable");
    exit();
}
?>
