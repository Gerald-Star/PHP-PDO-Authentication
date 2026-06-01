<?php 

//host

$host = "localhost";
$db = "db_auth_system";
$username = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

while (true) {
    try {
        $pdo->query("SELECT 1");
        echo "Connection successful";
        break;
    } catch (PDOException $e) {
        echo "Database connection failed: " . $e->getMessage() . ". Retrying in 5 seconds...";
        sleep(5); // Wait for 5 seconds before retrying
    }
}







?>