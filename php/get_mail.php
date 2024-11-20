<?php
session_start();

// Verifica se l'email esiste nella sessione
if (isset($_SESSION['email'])) {
    // Restituisci l'email in formato JSON
    echo json_encode(['email' => $_SESSION['email']]);
} else {
    // Restituisci un messaggio di errore in formato JSON
    echo json_encode(['email' => 'Email non disponibile']);
}
?>
