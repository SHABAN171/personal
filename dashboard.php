<!DOCTYPE html>
<html>
    <head><title>D</title>
<body>
    <style>
        body{
            background-color: bisque;
        }
    </style>
</body>
</head>
</html>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo  "Welcome our client to track your budget!";"<br>"

// You can add more functionality here, like expense tracking, etc.
?>
<a href="budget.php">HERE</a><br><br>
<a href="logout.php">Logout</a>


