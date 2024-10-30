<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wishbone_db";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Riceve i dati dal form di login
$email = $_POST['email'];
$password = $_POST['password'];

// Verifica che l'utente esista nel database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // L'utente esiste, controlla la password
    $user = $result->fetch_assoc();
    
    if (password_verify($password, $user['password'])) {
        echo "Accesso effettuato con successo!";
        // Qui potresti reindirizzare alla homepage o all'area riservata
        // header("Location: homepage.html");
        // exit();
    } else {
        echo "Password errata. <a href='login.html'>Riprova</a>";
    }
} else {
    echo "Utente non trovato. <a href='registration.html'>Registrati</a>";
}

$conn->close();
?>
