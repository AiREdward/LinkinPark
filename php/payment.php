<?php
session_start(); // Avvia la sessione

include 'db_config.php';
$utente_id = $_SESSION['user_id'];

// Recupera i dati dal form
$n_carta = $_POST['n_carta'] ?? '';
$nome = $_POST['nome'] ?? '';
$data_scadenza = $_POST['data_scadenza'] ?? '';
$ccv = $_POST['ccv'] ?? '';
$costo_tot = 600; // Valore statico basato su payment.html
$el_acquistati = "Corsair Mouse, Gaming keyboard"; // Elenco statico degli articoli

// Verifica se i campi sono compilati
if (empty($n_carta) || empty($nome) || empty($ccv)) {
    die("Tutti i campi sono obbligatori.");
}

$sql = "INSERT INTO transazioni (n_carta, nome, data_scadenza, ccv, costo_tot, el_acquistati, utente_id) VALUES ('$n_carta', '$nome', '$data_scadenza', '$ccv', '$costo_tot', '$el_acquistati', '$utente_id')";

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
