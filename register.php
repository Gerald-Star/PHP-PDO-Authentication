<?php

require 'config.php';

if (isset($_POST['register'])) {

    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Empty fields
    if (
        empty($fullName) ||
        empty($email) ||
        empty($password) ||
        empty($confirm_password)
    ) {
        die("All fields are required.");
    }

    // Password length
    if (strlen($password) < 8) {
        die("Password must be at least 8 characters long.");
    }

    // Confirm password
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Email already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->fetch()) {
        die("Email already registered.");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user using prepared statement to prevent SQL injection
    // the ? placeholders will be replaced with the actual values when execute() is called
    // this ensures that the values are properly escaped and prevents malicious input from being executed as SQL code
    $stmt = $pdo->prepare(
        "INSERT INTO users (fullname, email, password)
         VALUES (?, ?, ?)"
    );

    $stmt->execute([
        $fullName,
        $email,
        $hashedPassword
    ]);

    header("Location: login.php");
    exit();
}