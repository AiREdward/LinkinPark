<?php
include 'db_config.php';

// Riceve i dati dal form di registrazione
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
    echo "L'email è già registrata. <a href='registration.html'>Torna indietro</a>";
} else {
    // Inserisci il nuovo utente
    $sql = "INSERT INTO utenti (nome, cognome, email, password, indirizzo, telefono, data_nascita) 
            VALUES ('$nome', '$cognome', '$email', '$password', '$indirizzo', '$telefono', '$data_nascita')";

    if ($conn->query($sql) === TRUE) {
        // Ottieni il percorso dinamico della directory principale
        $base_url = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME'])) . "/";

        // Redirect alla pagina di login
        header("Location: " . $base_url . "login.html");
        exit();
    } else {
        echo "Errore nell'inserimento: " . $conn->error;  // Messaggio di errore dettagliato
    }
}

$conn->close();
?>