<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// drop pre-existing tables if they exist
$sql = "DROP TABLE IF EXISTS ColorVote";
mysqli_query($conn, $sql);


// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE ColorVote (
colorName VARCHAR(30) NOT NULL PRIMARY KEY,
voteNum INT(6) UNSIGNED AUTO_INCREMENT 

)";

if (mysqli_query($conn, $sql)) {
    echo "Table ColorVote created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

//insert row
$sql = "INSERT INTO ColorVote (colorName)
VALUES ('Blue')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>