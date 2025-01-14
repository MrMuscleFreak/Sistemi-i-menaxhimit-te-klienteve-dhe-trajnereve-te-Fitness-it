<?php

include_once __DIR__ . "/../logic/config.php";

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all sessions from the database
$sql = "    SELECT 
                tp.name AS program_name,
                CONCAT(c.first_name, ' ', c.last_name) AS client_name,
                CONCAT(t.first_name, ' ', t.last_name) AS trainer_name,
                s.session_date
            FROM sessions s
            JOIN training_programs tp ON s.program_id = tp.id
            JOIN clients c ON s.client_id = c.id
            JOIN trainers T ON c.trainer_id = t.id
            ORDER BY s.session_date DESC
            LIMIT 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="payment-record">
                <div class="record-info">
                    <span class="record-amount">' . $row["program_name"] . '</span>
                    <span class="record-name">' . $row["client_name"] . " trained with <strong>" . $row["trainer_name"] . '</strong> </span>
                </div>
                <div class="record-date">' . $row["session_date"] . '</div>
            </div>';
    }
} else {
    echo "0 results";
}

$conn->close();
