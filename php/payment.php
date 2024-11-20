<?php
session_start(); // Avvia la sessione

// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wishbone_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Recupera i dati dal form
$n_carta = $_POST['cardnumber'] ?? '';
$nome = $_POST['name'] ?? '';
$ccv = $_POST['ccv'] ?? '';
$costo_tot = 600; // Valore statico basato su payment.html
$el_acquistati = "Corsair Mouse, Gaming keyboard"; // Elenco statico degli articoli

// Verifica se i campi sono compilati
if (empty($n_carta) || empty($nome) || empty($ccv)) {
    die("Tutti i campi sono obbligatori.");
}




$sql = "INSERT INTO transazioni (n_carta, nome, ccv, costo_tot, el_acquistati) VALUES ('$n_carta', '$nome', '$ccv', '$costo_tot', '$el_acquistati')";

if ($conn->query($sql) === TRUE) {
    // Ottieni il percorso dinamico della directory principale
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME'])) . "/";

    exit();

} else {
    echo "Errore durante la registrazione del pagamento: "  . $conn->error;  // Messaggio di errore dettagliato
}


// Chiudi la connessione
$conn->close();
?>
