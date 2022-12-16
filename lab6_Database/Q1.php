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

// Create database
$sql_database = "CREATE DATABASE UTHMPagoh ";
$sql_table = "CREATE TABLE student (Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, Names VARCHAR(50) NOT NULL, Ages INT NOT NULL, States VARCHAR(50) NOT NULL, Scores INT NOT NULL)";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql_insert = "INSERT INTO UTHMPagoh(Names, Ages, States, Scores) VALUES ('Gabriel', 20, 'Kedah', 30),('Micheal', 12,'Penang',10), ('Ronaldo', 13, 'Perak', 98), ('Roberto', 22, 'Perak', 76) ";
if ($conn->query($sql_insert) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql_show = "SELECT * FROM UTHMPagoh";
$sql_delete = "DROP FROM Student WHERE States = 'Penang' ";
$sql_count = "SELECT count(*) as  count FROM student";

//show table
$conn->query($sql_show);

//count
$conn->query($sql_count);

///delete table
$conn->query($sql_delete);


$conn->close();
?>