<?php
// Connessione al database
$servername = "localhost";
$username = "root"; // Nome utente predefinito di XAMPP
$password = "";     // Password predefinita di XAMPP
$dbname = "wishbone_db";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Riceve i dati dal form di registrazione
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Cripta la password

// Controlla se l'email è già registrata
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "L'email è già registrata. <a href='registration.html'>Torna indietro</a>";
} else {
    // Inserisci il nuovo utente
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registrazione avvenuta con successo! <a href='login.html'>Accedi qui</a>";
    } else {
        echo "Errore nell'inserimento: " . $conn->error;  // Messaggio di errore dettagliato
    }
}

$conn->close();
?>