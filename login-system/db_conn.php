<?php 

$sname= "localhost";
$unmae= "tevinb";
$password= "Tevin1944";

$db_name = "tevinb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
echo "Connection failed!";

}