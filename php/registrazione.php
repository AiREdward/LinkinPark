<?php
include '../includes/db_config.php';

// Riceve i dati dal form di registrazione
$username = $_POST['username'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Cripta la password
$indirizzo = $_POST['indirizzo'];
$telefono = $_POST['telefono'];
$data_nascita = $_POST['data_nascita'];

// Controlla se l'email è già registrata
$sql = "SELECT * FROM utenti WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $existing = $result->fetch_assoc();
    if ($existing['email'] === $email) {
        header("Location: ../registrazione.php?error=email_used");
    } elseif ($existing['username'] === $username) {
        header("Location: ../registrazione.php?error=username_used");
    }
    exit();
} else {
    // Inserisce il nuovo utente
    $sql = "INSERT INTO utenti (username, nome, cognome, email, password, indirizzo, telefono, data_nascita) 
            VALUES ('$username', '$nome', '$cognome', '$email', '$password', '$indirizzo', '$telefono', '$data_nascita')";

    if ($conn->query($sql) === TRUE) {
        // Ottiene il percorso dinamico della directory principale
        $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME'])) . "/";

        // Redirect alla pagina di login
        header("Location: " . $base_url . "accedi.php");
        exit();
    } else {
        echo "Errore nell'inserimento: " . $conn->error;
    }
}

$conn->close();
?>