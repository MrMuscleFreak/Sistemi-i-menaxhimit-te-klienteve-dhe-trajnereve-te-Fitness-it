<?php

include_once __DIR__ . '/../logic/config.php';

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO clients (first_name, last_name, date_of_birth, address, contact_info, trainer_id) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $first_name, $last_name, $date_of_birth, $address, $contact_info, $trainer_id);

// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$contact_info = $_POST['contact_info'];
$trainer_id = $_POST['trainer_id'];

if ($stmt->execute()) {
    echo "New client added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: /demo/fitness_app/index.php?page=clients");
exit();
