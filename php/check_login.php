<?php
session_start();

// Restituisce lo stato di login come JSON
$response = [
    "logged_in" => isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true
];

header('Content-Type: application/json');
echo json_encode($response);
?>
