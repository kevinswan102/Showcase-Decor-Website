<?php
/* Database credentials. */
define('DB_SERVER', '');
define('DB_USERNAME', 'swank8');
define('DB_PASSWORD', '');
define('DB_NAME', 'swank8');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
