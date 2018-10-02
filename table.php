<?php
require 'config.php';
try{
	$sql = "CREATE TABLE user(
    /*name INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, */
    name VARCHAR(30) NOT NULL,
    regno INT UNSIGNED PRIMARY KEY,
    branch VARCHAR(20) NOT NULL,
    semester INT(1) NOT NUll,
    phone INT(10) NOT NUll,
    email VARCHAR(50) NOT NULL,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    echo "Created successfully";
  	}
  	catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }
?>
    