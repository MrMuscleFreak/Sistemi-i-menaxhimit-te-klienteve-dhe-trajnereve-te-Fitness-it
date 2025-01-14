<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
</head>
<body>
<div class="login-container">
    <div class="login-header">
        <h1>Fitness App Dashboard</h1>
    </div>
    <div class="login-box">
        <!-- <h2>Login</h2> -->
        <form action="/demo/fitness_app/logic/authenticate.php" method="POST">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username..." required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password..." required>
            </div>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($_GET["error"])) {
            echo '<p class="error">Invalid username or password</p>';
        } ?>
    </div>
</div>

</body>
</html>