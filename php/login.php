<?php
session_start();

include 'db_config.php';

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
    
    if (password_verify($password, $utenti['password'])) {
        // Imposta la sessione
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $utenti['id'];
        $_SESSION['email'] = $utenti['email'];
        
        // Reindirizza alla pagina specificata
        header("Location: $redirectPath");
        exit();
    } else {
        echo "Password errata. <a href='../login.html'>Riprova</a>";
    }
} else {
    echo "Utente non trovato. <a href='../registration.html'>Registrati</a>";
}

$conn->close();
?>