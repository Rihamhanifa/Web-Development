<?php

$hostname='localhost';
$username= 'root';
$password= '5613';
$dbname= 'phpproject';

$mysqli = mysqli_connect($hostname, $username, $password, $dbname);

if($mysqli === false)
{
    die('Error Could not connect '. mysqli_connect_error());
}
echo "Connected  Successfully";

?>