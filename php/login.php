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

$email = $_POST['email'];
$password = $_POST['password'];
$redirect = $_POST['redirect'] ?? 'homepage.html'; // Valore di default

$sql = "SELECT * FROM utenti WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $utenti = $result->fetch_assoc();
    
    if (password_verify($password, $utenti['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $utenti['id'];
        $_SESSION['email'] = $utenti['email'];
        
        header("Location: $redirect");
        exit();
    } else {
        echo "Password errata. <a href='login.html'>Riprova</a>";
    }
} else {
    echo "Utente non trovato. <a href='registration.html'>Registrati</a>";
}

$conn->close();
?>