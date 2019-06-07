<?php 

$host = "localhost";
$user = "root";
$password = "";
$bd = "test";

$con = mysqli_connect($host, $user, $password, $bd);

echo '<pre>';
print_r($con);

?>