<?php
session_start();

include '../includes/db_config.php';

$utente_id = $_SESSION['user_id'];

// Controlla se la richiesta è per ottenere i dati dell'utente
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getUser') {
    // Recupera il nome e il cognome dell'utente dal database
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
$nome = $_POST['nome'] ?? ''; // Cambiato da $titolare a $nome
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
    $itemTotal = $item['price'] * $item['quantity'];
    $subtotal += $itemTotal;
    $quantita += $item['quantity'];
    $el_acquistati[] = $item['name'];
    // $el_acquistati[] = $item['name'] . "\nQuantità: " . $item['quantity'] . "\nTaglia: " . $item['size'] . "\nPrezzo: €" . number_format($item['price'], 2) . " cad.";
}

$el_acquistati_str = implode("\n\n", $el_acquistati);

// Inserisci i dati nel database
$sql = "INSERT INTO transazione (n_carta, titolare, data_scadenza, ccv, totale, el_acquistati, quantita, utente_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssdsis", $n_carta, $nome, $data_scadenza, $ccv, $subtotal, $el_acquistati_str, $quantita, $utente_id);

if ($stmt->execute()) {
    // Ottieni il percorso dinamico della directory principale
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME'])) . "/";
    header("Location: " . $base_url . 'shop.php'); 

    // Cancella il carrello
    unset($_SESSION['cart']);
    
    exit();
} else {
    echo "Errore durante la registrazione del pagamento: "  . $stmt->error;
}

$conn->close();
?>
