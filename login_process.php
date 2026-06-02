<?php
session_start();
require 'config.php';
# After validating the user's credentials, login_process.php should contain something similar to:
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user'] = $user['email'];

    header("Location: dashboard.php");
    exit();
}

echo "Invalid email or password";