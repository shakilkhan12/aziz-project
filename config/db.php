<?php 

// function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=shop", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn;
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
// }
// connect();
