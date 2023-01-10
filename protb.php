<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admindb";/* put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* sql query to create table */
$sql = "CREATE TABLE Product
(
ID int NOT NULL AUTO_INCREMENT,
Productname varchar(50),
Price varchar(50),
Brand varchar(50),
Quality varchar(50),
Description varchar(50),
PRIMARY KEY (ID)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>