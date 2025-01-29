<?php
session_start();

include '../includes/db_config.php';

$login = $_POST['login']; // email o username
$password = $_POST['password'];

// Gestione del redirect
$redirect = $_POST['redirect'] ?? 'index.php';
$redirect = ltrim($redirect, '/');
$redirectPath = "../$redirect";

// Verifica se il login è un'email o un username
if (strpos($login, '@') !== false) {
    $sql = "SELECT * FROM utenti WHERE email = ?";
} else {
    $sql = "SELECT * FROM utenti WHERE username = ?";
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $utenti = $result->fetch_assoc();

    // Verifica se l'account è bloccato
    if ($utenti['stato'] === 'bloccato') {
        header("Location: ../accedi.php?error=bloccato");
        exit();
    } elseif (password_verify($password, $utenti['password'])) {
        // Aggiorna il lastLogin
        $updateSql = "UPDATE utenti SET lastLogin = NOW() WHERE id = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("i", $utenti['id']);
        $updateStmt->execute();

        // Imposta le variabili di sessione
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $utenti['id'];
        $_SESSION['email'] = $utenti['email'];
        $_SESSION['ruolo'] = $utenti['ruolo'];

        // Reindirizza alla pagina specificata
        header("Location: $redirectPath");
        exit();
    } else {
        // Password errata
        header("Location: ../accedi.php?error=password");
        exit();
    }
} else {
    // Utente non trovato
    header("Location: ../accedi.php?error=utente");
    exit();
}

$conn->close();
?>