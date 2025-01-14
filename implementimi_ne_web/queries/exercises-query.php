<?php

include_once __DIR__ . "/../logic/config.php";

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all exercises from the database
$sql = "SELECT 
            e.name AS name, 
            e.type, 
            e.video_link AS youtube_video_id, 
            COUNT(DISTINCT pe.program_id) AS program_count
        FROM 
         Exercises e
        LEFT JOIN 
         program_exercises pe ON e.id = pe.exercise_id
        GROUP BY 
            e.id, e.name, e.type, e.video_link;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $youtubeEmbed = "https://www.youtube.com/embed/" . $row["youtube_video_id"];

        echo '<div class="exercise-box">
            <div class="box-thumbnail">
                <div class="iframe-container">
                    <iframe src="' . $youtubeEmbed . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="box-info">
                <h2 class="exercise-name">' . $row["name"] . '</h2>
                <p class="exercise-type">' . $row["type"] . '</p>
                <p class="exercise-description">Used in ' . $row["program_count"] . ' programs</p>
            </div>
        </div>';
    }
} else {
    echo "0 results";
}

$conn->close();
