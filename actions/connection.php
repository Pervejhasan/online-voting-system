<?php

$servername = "localhost";
$username = "pervej";
$password = "12345";
$databasename="votingsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";




?>