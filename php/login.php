<?php
session_start();

include 'db_config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$redirect = str_replace('php/', '', ($_POST['redirect'] ?? 'homepage.html')); // Rimuove 'php/' dal redirect

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