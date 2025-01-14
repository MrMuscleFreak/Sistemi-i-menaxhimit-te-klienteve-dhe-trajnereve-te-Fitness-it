<?php

include_once __DIR__ . "/../logic/config.php";

//create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//fetch all trainers from the database
$sql = "SELECT * FROM trainers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="person-box">
            <div class="box-avatar">
            <img src="https://ui-avatars.com/api/?name=' . $row["first_name"] . "+" . $row["last_name"] . '" alt="' . $row["first_name"] . '">
            </div>
            <div class="box-bio">
            <h2 class="bio-name">' . $row["first_name"] . " " . $row["last_name"] . '</h2>
            <p class="bio-position">' . $row["specialization"] . " <br> " . $row["experience"] . ' years experience</p>
            </div>
            <div class="box-actions">
            </div>
        </div>';
    }
} else {
    echo "0 results";
}
$conn->close();
