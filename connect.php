<?php
$dsn = 'mysql:host=localhost;dbname=basm'; // Ensure 'basm' is your actual DB name
$user = 'root'; // MySQL username
$pass = ''; // MySQL password (empty if you're using the default setup)
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection successful!';
} catch(PDOException $ex) {
    echo "Failed to connect with database! " . $ex->getMessage();
}
?>
