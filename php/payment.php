<?php
// Configurazione della connessione al database
$dsn = 'mysql:host=localhost;dbname=nome_del_tuo_database;charset=utf8';
$username = 'tuo_username';
$password = 'tua_password';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

// Verifica che il modulo sia stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST['cardNumber'];
    $cardName = $_POST['cardName'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];
    $amount = 100; // Puoi cambiare l'importo a seconda delle tue necessità

    // Supponiamo che l'utente sia già loggato e che l'ID utente sia disponibile nella sessione
    session_start();
    $userId = $_SESSION['user_id']; // Assicurati che 'user_id' sia memorizzato correttamente nella sessione

    try {
        // Inserisci la transazione nel database
        $sql = "INSERT INTO transactions (user_id, card_number, card_name, expiry_date, amount) 
                VALUES (:user_id, :card_number, :card_name, :expiry_date, :amount)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':user_id' => $userId,
            ':card_number' => $cardNumber,
            ':card_name' => $cardName,
            ':expiry_date' => $expiryDate,
            ':amount' => $amount
        ]);

        echo "Transazione registrata con successo.";
    } catch (PDOException $e) {
        echo "Errore durante la registrazione della transazione: " . $e->getMessage();
    }

    // Registra anche in un file di log
    $log = "User ID: $userId | Carta: $cardNumber | Nome: $cardName | Scadenza: $expiryDate | Importo: $amount\n";
    file_put_contents('logs/transactions.txt', $log, FILE_APPEND);
}
?>
