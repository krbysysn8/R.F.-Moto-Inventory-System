<?php

$host = "localhost";
$user = "root";
$password = "Hangkyutq08.";
$database = "rfmoto_inventory";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>