<?php 
require_once "ConnectionFactory.class.php";

$connection = ConnectionFactory::getConnection();

echo '<pre>';
print_r($connection);

?>