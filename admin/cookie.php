<?php
// Start session and include database connection
include("../admin/loginConnect.php");

// Verify cookie exists
if (!isset($_COOKIE['admin'])) {
    header('Location: ../admin/login.php');
    exit;
}

// Sanitize cookie value to prevent SQL injection
$adminUsername = $conn->real_escape_string($_COOKIE['admin']);

// Use prepared statement for security
$sql = "SELECT * FROM `registeration` WHERE usernames = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Database error: " . $conn->error);
}

$stmt->bind_param("s", $adminUsername);
$stmt->execute();
$result = $stmt->get_result();
$user = array();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Clear invalid cookie and redirect
    setcookie('admin', '', time() - 3600, '/');
    header('Location: ../admin/login.php');
    exit;
}

$stmt->close();
$conn->close();
?>