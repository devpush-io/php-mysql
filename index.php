<?php

// Database details
$dbHost = '127.0.0.1'; // Using "localhost" will cause an error
$dbName = 'test_db';
$dbUser = 'root';
$dbPassword = '';

// Data source name
$dsn = 'mysql:dbname=' . $dbName . ';host=' . $dbHost;

// PDO Object
$pdo = new PDO($dsn, $dbUser, $dbPassword);

// ###################################
// Query 1 - GET USERS FROM DB
// ###################################
//
// MySQL query to get all users from the test database
$sql = 'SELECT * FROM users';

$pdoStatement = $pdo->query($sql);
$rows = $pdoStatement->fetchAll();

foreach ($rows as $row) {
    //echo '<div>User: ' . $row['name'] . '</div>';
}

// ###################################
// Query 2 - ADD NEW USER TO DB
// ###################################
//
// Add a new user to the test database
$name = 'Mesh';
$phone = '(555) 123-4567';
$email = 'mesh@gmail.com';
$address = '123 Main Street';
$zipCode = '5656';

// MySQL query to add new user to test database
$sql = "INSERT INTO users (name, phone, email, address, postal_zip)
        VALUES (:name, :phone, :email, :address, :zipCode)";

$pdoStatement = $pdo->prepare($sql);

// Run MySQL query with values array mapped to values in MySQL query
$values = [
    ':name' => $name,
    ':phone' => $phone,
    ':email' => $email,
    ':address' => $address,
    ':zipCode' => $zipCode
];
$result = $pdoStatement->execute($values);

echo 'Result: ' . ($result ? 'Added' : 'Not added');
