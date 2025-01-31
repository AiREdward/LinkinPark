<?php
session_start();

// Restituisce lo stato di login come JSON
$response = [
    "logged_in" => isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true
];

if ($response['logged_in']) {
    $response['email'] = $_SESSION['email']; 
}

header('Content-Type: application/json');
echo json_encode($response);
?>
