
<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default page is 'home'
$query = isset($_GET['query']) ? $_GET['query'] : null;

if ($query) {
    include('logic/search.php');
} else {
    switch ($page) {
        case 'home':
            include('dashboard/home.php');
            break;
        case 'programs':
            include('dashboard/training-programs.php');
            break;
        case 'excercises':
            include('dashboard/excercise-library.php');
            break;
        case 'clients':
            include('dashboard/clients.php');
            break;
        case 'payments':
            include('dashboard/payment-records.php');
            break;
        default:
            echo "<h2>Error!</h2>";
    }
}
?>