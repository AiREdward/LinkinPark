<?php
include '../includes/db_config.php';
include 'functions.php'; // File dove sono definite le funzioni

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = array();

    // Identifica l'azione richiesta
    $action = isset($_POST['action']) ? $_POST['action'] : null;

    switch ($action) {
        case 'update_user':
            $user_id = intval($_POST['user_id']);
            $role = trim($_POST['role']);
            $status = trim($_POST['status']);
            $response['message'] = updateUser($conn, $user_id, $role, $status);
            break;

        case 'find_user':
            $email = trim($_POST['email']);
            $user = findUserByEmail($conn, $email);
            if ($user) {
                $response['user'] = $user;
            } else {
                $response['message'] = "Utente non trovato!";
            }
            break;

        case 'get_stats':
            $response = getTransactionStats($conn);
            break;

        case 'find_event':
            $date = trim($_POST['date']);
            $event = findEventByDate($conn, $date);
            if ($event) {
                $response['event'] = $event;
            } else  {
                $response['message'] = "Evento non trovato";
            }
            break;

        case 'update_event':
            $event_id = intval($_POST['id']);
            $evento = trim($_POST['evento']);
            $data = trim($_POST['data']);
            $orario = trim($_POST['orario']);
            $luogo = trim($_POST['luogo']);
            $citta = trim($_POST['citta']);
            $paese = trim($_POST['paese']);
            $descrizione = trim($_POST['descrizione']);
            $prezzo = floatval($_POST['prezzo']);
            $response['message'] = updateEvent($conn, $event_id, $evento, $data, $orario, $luogo, $citta, $paese, $descrizione, $prezzo);
            $response['debug'] = 'This is a debug message from PHP';
            if (!$response['message']) {
                $response['message'] = 'Nessuna modifica effettuata.';
            } 
            break;

        case 'add_event':
            $evento = trim($_POST['evento']);
            $data = trim($_POST['data']);
            $orario = trim($_POST['orario']);
            $luogo = trim($_POST['luogo']);
            $citta = trim($_POST['citta']);
            $paese = trim($_POST['paese']);
            $descrizione = trim($_POST['descrizione']);
            $prezzo = floatval($_POST['prezzo']);
        
            $result = addEvent($conn, $evento, $data, $orario, $luogo, $citta, $paese, $descrizione, $prezzo);
            
            if ($result === true) {
                $response['success'] = true;
                $response['message'] = "Evento aggiunto con successo!";
            } else {
                $response['success'] = false;
                $response['message'] = "Errore nell'aggiunta dell'evento: " . $result;
            }
            break;

        default:
            $response['message'] = "Azione non valida!";
            break;
    }

    echo json_encode($response); // Risponde con i dati in formato JSON
    exit;
}

$conn->close();
?>
