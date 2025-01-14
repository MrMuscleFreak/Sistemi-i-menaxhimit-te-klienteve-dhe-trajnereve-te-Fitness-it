<?php

include_once __DIR__ . "/../logic/config.php";

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sort = isset($_GET["sort"]) ? $_GET["sort"] : "a-z";
$orderBy = "c.first_name ASC"; // Default sorting
if ($sort == "unpaid") {
    $orderBy = "p.id IS NULL DESC, c.first_name ASC";
}

// Fetch all payments from the database
$sql = "    SELECT c.first_name , c.last_name, p.amount, p.payment_date, t.price_per_session
            FROM clients c
            JOIN trainers t on c.trainer_id = t.id
            LEFT JOIN payments p ON p.client_id = c.id
            ORDER BY $orderBy";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row["amount"] ? '<div class="record-date">2023-10-03</div>' : '<div class="record-status status-red">Unpaid</div>';
        $amount = $row["amount"] ? $row["amount"] : $row["price_per_session"];
        $color = $row["amount"] ? " " : "status-red";

        echo '<div class="payment-record">
                <div class="record-info">
                    <span class="record-amount ' . $color . '">' . $amount . ' $</span>
                    <span class="record-name ' . $color . '">' . $row["first_name"] . " " . $row["last_name"] . '</span>
                </div>
                ' . $status . '
            </div>';
    }
} else {
    echo "0 results";
}

$conn->close();
