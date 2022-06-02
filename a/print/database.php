<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sys";

// Create connection
$con = new mysqli($servername, $username, $password, $database)or die ("no database"); 
if(mysqli_connect_errno())
{     echo 'Failed to connect to database'.mysqli_connect_error();
}
?>