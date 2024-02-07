<?php
session_start(); // Start a new session

// Database connection variables
$host = 'localhost'; // or your host
$username = 'htmlbtes_notbyai'; // your database username
$password = 'qaFnox-4zinmy-hapbyx'; // your database password
$database = 'htmlbtes_notbyai'; // your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize the email input
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

// Prepare and bind
$stmt = $conn->prepare("SELECT email FROM customers WHERE email = ?");
$stmt->bind_param("s", $email);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email found, login successful
    $_SESSION['user_email'] = $email; // Store email in session variable
    header("Location: creator-page-application.php"); // Redirect to a protected page
} else {
    // Email not found, redirect back to login with an error
    header("Location: start.php?error=invalid_email");
}

$stmt->close();
$conn->close();
?>
