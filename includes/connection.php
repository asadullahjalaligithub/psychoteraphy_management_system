<?php
$username="root";
$password="root";
$db="social";
$server="localhost";
$connection=mysqli_connect($server,$username,$password,$db);
if(!$connection)
die("Failed to connect to Database");