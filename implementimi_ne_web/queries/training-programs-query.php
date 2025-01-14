<?php

include_once __DIR__ . "/../logic/config.php";

// Create a connection to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search string from the query parameters
$search = isset($_GET["search"]) ? $_GET["search"] : "";

// Prepare the SQL query with a WHERE clause if a search string is provided
$sql = "SELECT 
            tp.id AS program_id,
            tp.name AS program_name,
            tp.description AS program_description,
            tp.duration_weeks,
            CONCAT(t.first_name, ' ', t.last_name) AS trainer_name,
            pe.sequence_number,
            e.name AS exercise_name
        FROM 
            training_programs tp
        JOIN 
            trainers t ON tp.trainer_id = t.id
        JOIN 
            program_exercises pe ON pe.program_id = tp.id
        JOIN 
            exercises e ON pe.exercise_id = e.id";

if (!empty($search)) {
    $sql .= " WHERE tp.name LIKE ?";
}

$sql .= " ORDER BY tp.id, pe.sequence_number";

$stmt = $conn->prepare($sql);

if (!empty($search)) {
    $searchParam = "%" . $search . "%";
    $stmt->bind_param("s", $searchParam);
}

$stmt->execute();
$result = $stmt->get_result();

$trainingPrograms = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $programId = $row["program_id"];
        if (!isset($trainingPrograms[$programId])) {
            $trainingPrograms[$programId] = [
                "name" => $row["program_name"],
                "description" => $row["program_description"],
                "duration_weeks" => $row["duration_weeks"],
                "trainer_name" => $row["trainer_name"],
                "trainer_avatar_url" =>
                    "https://ui-avatars.com/api/?name=" .
                    urlencode($row["trainer_name"]),
                "exercises" => [],
            ];
        }
        $trainingPrograms[$programId]["exercises"][] = [
            "sequence_number" => $row["sequence_number"],
            "name" => $row["exercise_name"],
        ];
    }
} else {
    echo "0 results";
}

$conn->close();

$html = "";

foreach ($trainingPrograms as $program) {
    $trainerAvatarUrl = htmlspecialchars($program["trainer_avatar_url"]);
    $programName = htmlspecialchars($program["name"]);
    $programDescription = htmlspecialchars($program["description"]);
    $durationWeeks = htmlspecialchars($program["duration_weeks"]);
    $trainerName = htmlspecialchars($program["trainer_name"]);

    $exercisesHtml = "";
    foreach ($program["exercises"] as $exercise) {
        $sequenceNumber = htmlspecialchars($exercise["sequence_number"]);
        $exerciseName = htmlspecialchars($exercise["name"]);
        $exercisesHtml .= "<li><strong>Exercise #$sequenceNumber:</strong> $exerciseName</li>";
    }

    $html .= "
    <div class=\"program-card\">
        <div class=\"trainer-avatar\">
            <img src=\"$trainerAvatarUrl\" alt=\"Trainer Avatar\">
        </div>
        <h2 class=\"program-title\">$programName</h2>
        <div class=\"program-info\">
            <p class=\"program-description\">$programDescription</p>
            <ul class=\"program-details\">
                <li><strong>Duration:</strong> $durationWeeks weeks</li>
                <li><strong>Trainer:</strong> $trainerName</li>
                $exercisesHtml
            </ul>
        </div>
    </div>";
}

echo $html;
