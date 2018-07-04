<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE thread";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
#    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

try{	
    $conn = new PDO("mysql:host=$servername;dbname=thread", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#    echo "Connected successfully<br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
try{
	$sql = "CREATE TABLE answers (
    ID INT(10) , 
    USERNAME VARCHAR(15),
    ANSWERS VARCHAR(50)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(Exception $e){
	
}
try{
	$sql = "CREATE TABLE queries (
    ID int(10) NOT NULL AUTO_INCREMENT primary key,
    USERNAME VARCHAR(15),
    QUERIES VARCHAR(50),
    reg_date TIMESTAMP
    )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table queries created successfully";
    }
catch(Exception $e){
	
}
?>