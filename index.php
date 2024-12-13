<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Budget Tracker</title>
</head>
<body>
    <style>
        body{
            background-image: url(../personal/download.jpg);
        }
    </style>
    <h1>Welcome to the Personal Budget Tracker</h1>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Hello, User! You are logged in.</p>
        <a href="dashboard.php">Go to Dashboard</a> | 
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>Please register or log in to start tracking your budget.</p>
        <a href="register.php">Register</a> | 
        <a href="login.php">Login</a>
    <?php endif; ?>
</body>
</html>
