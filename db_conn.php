<?php

$sname= "localhost";
$unmae= "id21008871_leadstar";
$password = "Leadstar@12";

$db_name = "id21008871_student";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
