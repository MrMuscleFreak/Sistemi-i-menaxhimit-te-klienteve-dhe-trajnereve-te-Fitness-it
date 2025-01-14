<?php

include_once __DIR__ . "/../logic/config.php";

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Determine the sorting option
$sort = isset($_GET["sort"]) ? $_GET["sort"] : "a-z";
$orderBy = "c.first_name ASC"; // Default sorting
if ($sort == "unpaid") {
    $orderBy = "p.id IS NULL DESC, c.first_name ASC";
}

// Fetch all clients from the database
$sql = "SELECT c.first_name AS client_first, c.last_name AS client_last,
		t.first_name AS trainer_first, t.last_name AS trainer_last,
        c.date_of_birth AS birthday, t.price_per_session AS trainer_price,
        p.id AS paymentID
        FROM clients c
        LEFT JOIN trainers t ON c.trainer_id = t.id
        LEFT JOIN payments p ON c.id = p.client_id
        ORDER BY $orderBy";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Determine indicator for payment status
        $indicatorClass = !$row["paymentID"] ? "status-red" : "status-green";
        $statusText = !$row["paymentID"] ? $row["trainer_price"] . "$ Pending" : "Paid";

        echo '<div class="person-box">
            <div class="box-avatar">
                <img src="https://ui-avatars.com/api/?name=' . $row["client_first"] . "+" . $row["client_last"] . '" alt="' . $row["client_first"] . '">
            </div>
            <div class="box-bio">
                <h2 class="bio-name">' . $row["client_first"] . " " . $row["client_last"] . '</h2>
                <p class="bio-position">Trained by ' . $row["trainer_first"] . " " . $row["trainer_last"] . '</p>
            </div>
            <div class="box-status ' . $indicatorClass . '">
                <span class="status-text">' . $statusText . '</span>
            </div>
        </div>';
    }
} else {
    echo "0 results";
}

$conn->close();
