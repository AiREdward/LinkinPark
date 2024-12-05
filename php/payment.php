<?php
session_start(); // Avvia la sessione

include 'db_config.php';
$utente_id = $_SESSION['user_id'];

// Controlla se la richiesta è per ottenere i dati dell'utente
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getUser') {
    // Recupera il nome e il cognome dell'utente
    $sql = "SELECT nome, cognome FROM utenti WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $utente_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Restituisci i dati dell'utente in formato JSON
    echo json_encode($user);
    exit();
}

// Recupera i dati dal form
$n_carta = $_POST['n_carta'] ?? '';
$nome = $_POST['nome'] ?? '';
$data_scadenza = $_POST['data_scadenza'] ?? '';
$ccv = $_POST['ccv'] ?? '';

// Verifica se i campi sono compilati
if (empty($n_carta) || empty($nome) || empty($ccv)) {
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

$el_acquistati_str = implode(', ', $el_acquistati);

// Inserisci i dati nel database
$sql = "INSERT INTO transazioni (n_carta, nome, data_scadenza, ccv, costo_tot, el_acquistati, utente_id) VALUES ('$n_carta', '$nome', '$data_scadenza', '$ccv', '$subtotal', '$el_acquistati_str', '$utente_id')";

if ($conn->query($sql) === TRUE) {
    // Ottieni il percorso dinamico della directory principale
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME'])) . "/";
    header("Location: " . $base_url . 'shop.html'); 

    // Cancella il carrello
    unset($_SESSION['cart']);
    
    exit();
} else {
    echo "Errore durante la registrazione del pagamento: "  . $conn->error;  // Messaggio di errore dettagliato
}

// Chiudi la connessione
$conn->close();
?>
