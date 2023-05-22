<?php
$host = 'db'; // Docker service name for the MariaDB container
$user = 'root'; // MySQL username
$password = 'root'; // MySQL password
$database = 'mydatabase'; // Name of your database

// Create a new database connection
$connection = new mysqli($host, $user, $password, $database);

// Check if the connection was successful
if ($connection->connect_error) {
    die('Database connection failed: ' . $connection->connect_error);
}

// Use the database connection for executing queries or other database operations

// Close the database connection when done
$connection->close();
?>
