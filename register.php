<?php
include 'db.php';  // Make sure this includes the necessary database connection setup.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the input values.
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];

    // Validate that the email and password are not empty
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Use prepared statement to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

        // Execute the statement with the bound values
        if ($stmt->execute([$username, $email, $hashedPassword])) {
            echo "Registration successful! Please <a href='login.php'>log in</a>.";
        } else {
            echo "Error during registration.";
        }
    } catch (PDOException $e) {
        // Catch any database-related errors and display a message
        echo "Database error: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <style>
body{
    padding-left: 350px;
    background-color:bisque ;
}
.minor{
    border-style: dashed;
height: 200px;
width: 250px;
padding-left: 100px;
padding-top: 15px;
}
    </style>
    <h1>Register</h1>
    <form method="POST">
        <div class="main">
            <div class="minor">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
        </div>
        </div>
    </form>
</body>
</html>