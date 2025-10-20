<?php
// Start session and include database connection
include("../users/loginConnect.php");

// Verify cookie exists
if (!isset($_COOKIE['users'])) {
    header('Location: ../users/login.php');
    exit;
}

// Sanitize cookie value to prevent SQL injection
$usersUsername = $conn->real_escape_string($_COOKIE['users']);

// Use prepared statement for security
$sql = "SELECT * FROM `users` WHERE usernames = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Database error: " . $conn->error);
}

$stmt->bind_param("s", $usersUsername);
$stmt->execute();
$result = $stmt->get_result();
$user = array();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Clear invalid cookie and redirect
    setcookie('users', '', time() - 3600, '/');
    header('Location: ../users/login.php');
    exit;
}

$stmt->close();
$conn->close();
?>