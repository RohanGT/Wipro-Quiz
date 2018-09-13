<?php
	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="wiproquiz";
	try {
    $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>