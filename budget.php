<?php
$servername = "localhost";
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "budget_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $sql = "INSERT INTO expenses (description, amount, date) VALUES ('$description', '$amount', '$date')";
    $conn->query($sql);
}

// Fetch expenses
$sql = "SELECT * FROM expenses";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Budget Tracker</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px;
        background-image: url(../personal/download\ \(1\).jpg);
        }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
    
    </style>
</head>
<body>

<h1>Personal Budget Tracker</h1>

<form method="POST">
    <input type="text" name="description" placeholder="Description" required>
    <input type="number" name="amount" placeholder="Amount" required step="0.01">
    <input type="date" name="date" required>
    <button type="submit">Add Expense</button>
</form>

<h2>Expenses</h2>
<table>
    <tr>
        <th>Description</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php $conn->close(); ?>