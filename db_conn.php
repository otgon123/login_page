<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "meeting";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
	echo "Connection success";
?>