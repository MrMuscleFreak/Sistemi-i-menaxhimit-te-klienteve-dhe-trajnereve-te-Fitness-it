<?php

session_start();
include('config.php'); // Include your database configuration file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Define the correct username and password
    $correct_username = 'root';
    $correct_password = '6969';

    // Check if the provided credentials match the correct ones
    if ($username === $correct_username && $password === $correct_password) {
        // Credentials are correct, start a new session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the dashboard
        header('Location: /demo/fitness_app/index.php');
        exit;
    } else {
        // Credentials are incorrect
        header('Location: /demo/fitness_app/login.php?error=1');
        exit;
    }
}
