<?php
include('connection.php'); // Include database connection

// Check connection
global $conn;
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch and sanitize input
$n = mysqli_real_escape_string($conn, $_POST['name']);
$na = mysqli_real_escape_string($conn, $_POST['username']);
$ema = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);

// Hash the password before storing it
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Use prepared statements to insert data securely
$sql = "INSERT INTO signup (name, username, email, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind the parameters
    $stmt->bind_param("ssss", $n, $na, $ema, $hashed_password);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not execute query. " . $stmt->error;
    }
    $stmt->close(); // Close the prepared statement
} else {
    echo "ERROR: Could not prepare query. " . $conn->error;
}

mysqli_close($conn); // Close the database connection
?>
