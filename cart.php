<?php
require 'connectDB.php';  // Include the config.php file

// Create the seafood database
$query = "CREATE DATABASE seafood";  // Replace "seafood" with your desired database name

try {
    $connection->exec($query);
    echo "Database 'seafood' created successfully";
} catch (PDOException $exception) {
    die("Error creating database: " . $exception->getMessage());
}