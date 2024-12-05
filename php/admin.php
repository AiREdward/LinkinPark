<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = array();

    // Ricevi i dati dal form
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $role = isset($_POST['role']) ? trim($_POST['role']) : null;
    $status = isset($_POST['status']) ? trim($_POST['status']) : null;
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : null;

    // Modifica utente
    if ($user_id && $role && $status) {
        $stmt = $conn->prepare("UPDATE utenti SET ruolo = ?, stato = ? WHERE id = ?");
        $stmt->bind_param('ssi', $role, $status, $user_id);
        if ($stmt->execute()) {
            $response['message'] = "Utente aggiornato con successo!";
        } else {
            $response['message'] = "Errore nell'aggiornamento: " . $conn->error;
        }
        $stmt->close();
    }

    // Cerca utente
    if ($email) {
        $stmt = $conn->prepare("SELECT id, nome, cognome, email, ruolo, stato FROM utenti WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $response['user'] = $user;
        } else {
            $response['message'] = "Utente non trovato!";
        }
        $stmt->close();
    }

    echo json_encode($response); // Risponde con i dati in formato JSON
    exit;
}

$conn->close();
?>
