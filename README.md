  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


$pdo ->exec("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Fastest way to diagnose

Run this SQL and share the result:

SHOW TABLES;


Check the table structure

If users does exist, run:

DESCRIBE users;


Verify the current database

Run:

SELECT DATABASE();


Quick diagnostic

Run this SQL in phpMyAdmin:

USE db_auth_system;
SHOW TABLES;


<?php require 'includes/header.php'; ?>

<?php require 'includes/navbar.php'; ?>

hello world

<?php require 'includes/footer.php'; ?>