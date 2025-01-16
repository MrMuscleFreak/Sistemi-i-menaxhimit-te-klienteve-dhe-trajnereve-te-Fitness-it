
<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default page is 'home'
$query = isset($_GET['query']) ? $_GET['query'] : null;

if ($query) {
    include('logic/search.php');
} else {
    switch ($page) {
        case 'home':
            include('pages/home.php');
            break;
        case 'programs':
            include('pages/training-programs.php');
            break;
        case 'excercises':
            include('pages/excercise-library.php');
            break;
        case 'clients':
            include('pages/clients.php');
            break;
        case 'payments':
            include('pages/payment-records.php');
            break;
        case 'new-client':
            include('pages/new-client.php');
            break;
        default:
            echo "<h2>Error!</h2>";
    }
}
?>