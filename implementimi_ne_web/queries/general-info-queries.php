<?php

include_once __DIR__ . "/../logic/config.php";

//create a connection to the database

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//fetch all trainers from the database
$avg_sql = "SELECT ROUND(AVG(price_per_session),0) AS average FROM trainers";
$avg_result = $conn->query($avg_sql);

if ($avg_result->num_rows > 0) {
    // Output data of each row
    $row = $avg_result->fetch_assoc();
    echo ' <!-- info box prce -->
                    <div class="info-box">
                        <div class="box-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
                        </div>
                        
                        <div class="box-content">
                            <span class="big">' .
        $row["average"] .
        '</span>
                            Average Session ($)
                        </div>
                    </div>';
} else {
    echo "0 results";
}

//fetch the number of all excercises from the database
$excercises_sql = "SELECT COUNT(*) AS excercises FROM exercises";
$excercises_result = $conn->query($excercises_sql);

if ($excercises_result->num_rows > 0) {
    // Output data of each row
    $row = $excercises_result->fetch_assoc();
    echo '<!-- info box articles -->
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 10H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1zm-1 10H5v-8h14v8zM5 6h14v2H5zM7 2h10v2H7z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">' .
        $row["excercises"] .
        '</span>
						Quality Excercises
					</div>
				</div>';
} else {
    echo "0 results";
}

//fetch the number of all trainers from the database
$trainers_sql = "SELECT COUNT(*) AS trainers FROM trainers";
$trainers_result = $conn->query($trainers_sql);

if ($trainers_result->num_rows > 0) {
    // Output data of each row
    $row = $trainers_result->fetch_assoc();
    echo '<!-- info box users -->
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3,21c0,0.553,0.448,1,1,1h16c0.553,0,1-0.447,1-1v-1c0-3.714-2.261-6.907-5.478-8.281C16.729,10.709,17.5,9.193,17.5,7.5 C17.5,4.468,15.032,2,12,2C8.967,2,6.5,4.468,6.5,7.5c0,1.693,0.771,3.209,1.978,4.219C5.261,13.093,3,16.287,3,20V21z M8.5,7.5 C8.5,5.57,10.07,4,12,4s3.5,1.57,3.5,3.5S13.93,11,12,11S8.5,9.43,8.5,7.5z M12,13c3.859,0,7,3.141,7,7H5C5,16.141,8.14,13,12,13z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">' .
        $row["trainers"] .
        '</span>
						Qualified Trainers
					</div>
				</div>';
} else {
    echo "0 results";
}

//fetch the number of all clients from the database
$clients_sql = "SELECT COUNT(*) AS clients FROM clients";
$clients_result = $conn->query($clients_sql);

if ($clients_result->num_rows > 0) {
    // Output data of each row
    $row = $clients_result->fetch_assoc();
    echo '<!-- info box conversations -->
				<div class="info-box">
					<div class="box-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3C6.486 3 2 6.364 2 10.5c0 2.742 1.982 5.354 5 6.678V21a.999.999 0 0 0 1.707.707l3.714-3.714C17.74 17.827 22 14.529 22 10.5 22 6.364 17.514 3 12 3zm0 13a.996.996 0 0 0-.707.293L9 18.586V16.5a1 1 0 0 0-.663-.941C5.743 14.629 4 12.596 4 10.5 4 7.468 7.589 5 12 5s8 2.468 8 5.5-3.589 5.5-8 5.5z"/></svg>
					</div>
					
					<div class="box-content">
						<span class="big">' .
        $row["clients"] .
        '</span>
						Happy Clients
					</div>
				</div>';
} else {
    echo "0 results";
}

$conn->close();
