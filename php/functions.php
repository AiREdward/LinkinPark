<?php
include '../includes/db_config.php';

/**
 * Aggiorna il ruolo e lo stato di un utente
 */
function updateUser($conn, $user_id, $role, $status) {
    $stmt = $conn->prepare("UPDATE utenti SET ruolo = ?, stato = ? WHERE id = ?");
    $stmt->bind_param('ssi', $role, $status, $user_id);
    if ($stmt->execute()) {
        return "Utente aggiornato con successo!";
    } else {
        return "Errore nell'aggiornamento: " . $conn->error;
    }
}

/**
 * Cerca un utente per email
 */
function findUserByEmail($conn, $email) {
    $stmt = $conn->prepare("SELECT id, nome, cognome, email, ruolo, stato FROM utenti WHERE email LIKE ?");
    $email = "%" . $email . "%";
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function findEventByDate($conn, $date) {
    // Debug: Log invalid data format
    
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        error_log("Invalid data format: $date");
        return 'Invalid data format';
    }

    // Prepare the statement
    $stmt = $conn->prepare("SELECT evento, data, orario, luogo, citta, paese, descrizione, prezzo FROM tour WHERE data = ?");
    if (!$stmt) {
        error_log("Query preparation failed");
        return null; // Handle query preparation failure
    }

    $stmt->bind_param("s", $date);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $event = $result->fetch_assoc();
        error_log("Event found: " . print_r($event, true));
        return $event; 
    } else {
        error_log("No event found for date: $date");
        return null; 
    }
}


/**
 * Ottieni statistiche sulle transazioni
 */
function getTransactionStats($conn) {
    $stats = [];

    // Totale guadagno e numero di transazioni
    $stmt = $conn->query("SELECT COUNT(*) AS total_transactions, SUM(totale) AS total_revenue FROM transazione");
    if ($stmt) {
        $stats = $stmt->fetch_assoc();
        // Assicurati che total_revenue sia un numero, se è null metti 0
        $stats['total_revenue'] = floatval($stats['total_revenue']);  // Garantisce che sia un numero
    } else {
        return ['message' => 'Errore nella query delle transazioni: ' . $conn->error];
    }

    // Articolo più acquistato
    $stmt2 = $conn->query("SELECT el_acquistati FROM transazione");
    if ($stmt2) {
        $products = [];
        while ($row = $stmt2->fetch_assoc()) {
            $items = explode(", ", $row['el_acquistati']);
            foreach ($items as $item) {
                $products[$item] = ($products[$item] ?? 0) + 1;
            }
        }

        if (!empty($products)) {
            $stats['most_bought_product'] = array_keys($products, max($products))[0];
            $stats['most_bought_count'] = max($products);
        } else {
            $stats['most_bought_product'] = null;
            $stats['most_bought_count'] = 0;
        }
    } else {
        return ['message' => 'Errore nella query degli articoli acquistati: ' . $conn->error];
    }

    return $stats;
}

?>
