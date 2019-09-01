<?php 

$s_name   = "localhost";
$u_name   = "root";
$pass     = "1234";
$db_name  = "himu";


$conn = new mysqli($s_name, $u_name, $pass, $db_name);
if ($conn->connect_error) {
	die("not connection database");
} 
// else {
// 	echo "connection database succssfuly";
// }


 ?>