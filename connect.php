<?php

	$dsn = 'mysql:host=localhost;dbname=basm'; // Replace 'basm' with the actual database name
	$user = 'root'; // Ensure this is the correct MySQL username
	$pass = ''; // Ensure this is the correct password for the MySQL user
	$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Uncomment the line below to test the connection
    // echo 'Connection successful!';
} catch (PDOException $ex) {
    echo "Failed to connect with database! " . $ex->getMessage();
    die();
}
?>
