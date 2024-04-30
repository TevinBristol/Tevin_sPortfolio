<?php 

$sname= "localhost";
$unmae= "tevinb";
$password= "Tevin1944";

$db_name = "tevinb";

$con = mysqli_connect("localhost","tevinb","Tevin1944","tevinb");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
