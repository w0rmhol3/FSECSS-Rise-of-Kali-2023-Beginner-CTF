<?php
session_start();
// Hard-coded credentials
$correctUsername = "admin";
$correctPassword = "football1";

// Get user input
$userEnteredUsername = $_POST['username'];
$userEnteredPassword = $_POST['password'];

// Check if the entered credentials match the hard-coded values
if ($userEnteredUsername === $correctUsername && $userEnteredPassword === $correctPassword) {
    // Authentication successful, redirect to a success page
    $_SESSION['authSuccess'] = true;
    header("Location: flag.php");
    exit;
} else {
    // Authentication failed
    $loginFailed = true;

    // Redirect back to login.php
    header("Location: login.php?error=failed");
    exit;
}
?>
