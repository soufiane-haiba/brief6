<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$databaseName = "banksmanagement";

// Create database
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $databaseName";

if ($conn->query($sqlCreateDatabase) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
    die();
}

// Select the created database
$conn->select_db($databaseName);


$tableName = "Bank";
$sqlCreateTableBank = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(15) NOT NULL,
    logo LONGBLOB
)";

if ($conn->query($sqlCreateTableBank) === TRUE) {
    echo "Table $tableName created successfully";
} else {
    echo "Error creating table $tableName: " . $conn->error;
}

// Create "Agence" table
$tableName = "Agence";
$sqlCreateTableAgence = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT PRIMARY KEY AUTO_INCREMENT,
    longitude FLOAT NOT NULL,
    latitude FLOAT NOT NULL,
    bank_id INT,
    FOREIGN KEY (bank_id) REFERENCES Bank(id)
)";

if ($conn->query($sqlCreateTableAgence) === TRUE) {
    echo "Table $tableName created successfully";
} else {
    echo "Error creating table $tableName: " . $conn->error;
}


// Create "Adress" table
$tableName = "address";
$sqlCreateDatabase ="CREATE DATABASE IF NOT EXISTS $tableName(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ville VARCHAR(15),
    quartier VARCHAR(15),
    rue VARCHAR(15),
    code postal INT(7),
    telephone INT(12),
)";

// Create "client" table
$tableName = "client";
$sqlCreateTableClient = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(15) NOT NULL,
    prenom VARCHAR(15) NOT NULL,
    date_naissance DATE NOT NULL,
    nationalite VARCHAR(15),
    genre ENUM('homme', 'femme'),
    address_id INT,
    FOREIGN KEY (adress_id) REFERENCES address(id);

)";



if ($conn->query($sqlCreateTableAgence) === TRUE) {
    echo "Table $tableName created successfully";
} else {
    echo "Error creating table $tableName: " . $conn->error;
}

// Close the connection
$conn->close();
?>
