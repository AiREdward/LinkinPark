<?php
session_start(); // Avvia la sessione


////////////////////////////////////////
require_once 'logger.php';

// Initialize the logger
$logger = new Logger('payment.log');

////////////////////////////////////////


include 'db_config.php';
$utente_id = $_SESSION['user_id'];

// Log session user ID
$logger->log("User ID: $utente_id");

// Recupera i dati dal form
$n_carta = $_POST['n_carta'] ?? '';
$nome = $_POST['nome'] ?? '';
$data_scadenza = $_POST['data_scadenza'] ?? '';
$ccv = $_POST['ccv'] ?? '';

// Log form data
$logger->log("Card Number: $n_carta");
$logger->log("Cardholder Name: $nome");
$logger->log("Expiration Date: $data_scadenza");
$logger->log("CCV: $ccv");

// Verifica se i campi sono compilati
if (empty($n_carta) || empty($nome) || empty($ccv)) {
    $logger->log("Error: All fields are required.");
    die("Tutti i campi sono obbligatori.");
}

// Recupera il carrello dalla sessione
$cartItems = $_SESSION['cart'] ?? [];
$subtotal = 0;
$el_acquistati = [];

foreach ($cartItems as $item) {
    $subtotal += $item['price'] * $item['quantity'];
    $el_acquistati[] = $item['name'] . ' x ' . $item['quantity'] . ' - €' . number_format($item['price'] * $item['quantity'], 2);
}

// Log cart items and subtotal
$logger->log("Cart Items: " . json_encode($cartItems));
$logger->log("Subtotal: €" . number_format($subtotal, 2));

$el_acquistati_str = implode(', ', $el_acquistati);

// Inserisci i dati nel database
$sql = "INSERT INTO transazioni (n_carta, nome, data_scadenza, ccv, costo_tot, el_acquistati, utente_id) VALUES ('$n_carta', '$nome', '$data_scadenza', '$ccv', '$subtotal', '$el_acquistati_str', '$utente_id')";

// Log SQL query
$logger->log("SQL Query: $sql");

if ($conn->query($sql) === TRUE) {
    // Ottieni il percorso dinamico della directory principale
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME'])) . "/";

    // Log success message
    $logger->log("Payment recorded successfully. Redirecting to confirmation page.");

    // Reindirizza alla pagina di conferma o mostra un messaggio di successo
    header("Location: {$base_url}confirmation.html");
    exit();
} else {
    $logger->log("Error during payment registration: " . $conn->error);
    echo "Errore durante la registrazione del pagamento: "  . $conn->error;  // Messaggio di errore dettagliato
}

// Chiudi la connessione
$conn->close();
?>
