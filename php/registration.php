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
    // Email già registrata
    header("Location: ../registration.html?error=email_taken");
    exit(); // Interrompe l'esecuzione per evitare che il codice continui
} else {
    // Inserisci il nuovo utente
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        // Registrazione avvenuta con successo
        header("Location: ../login.html?success=registration");
        exit();
    } else {
        // Errore durante l'inserimento
        header("Location: ../registration.html?error=insert_failed");
        exit();
    }
}

$conn->close();
?>