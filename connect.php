<?php
$host = 'localhost';
$db = 'lift_service';
$user = 'root';
$pass = '';
$con=mysqli_connect($host,$user,$pass,$db) ;

if (!$con ) {
echo "not connected";
	# code...
}
 ?>