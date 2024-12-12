<?php
session_start();

include '../includes/db_config.php';

// Recupera i dati dal form
$email = $_POST['email'];
$password = $_POST['password'];

// Gestione del redirect
$redirect = $_POST['redirect'] ?? 'homepage.html'; // Percorso di default
$redirect = ltrim($redirect, '/'); // Rimuove eventuali '/' iniziali
$redirectPath = "../$redirect"; // Naviga al percorso corretto fuori da 'php'

// Query al database
$sql = "SELECT * FROM utenti WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $utenti = $result->fetch_assoc();
    
    if ($utenti['stato'] === 'bloccato') {
        header("Location: ../login.html?error=bloccato");
        exit();
    } elseif (password_verify($password, $utenti['password'])) {
        // Imposta la sessione
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $utenti['id'];
        $_SESSION['email'] = $utenti['email'];
        $_SESSION['ruolo'] = $utenti['ruolo']; // Salva il ruolo nella sessione
        
        // Reindirizza alla pagina specificata
        header("Location: $redirectPath");
        exit();
    } else {
        header("Location: ../login.html?error=password");
        exit();
    }
} else {
    header("Location: ../login.html?error=utente");
    exit();
}

$conn->close();
?>