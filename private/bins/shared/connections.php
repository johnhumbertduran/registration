<?php

$connections = mysqli_connect("localhost", "root", "", "registration");

if(mysqli_connect_errno()){
	
    echo "Failed to connect to MySQL: " .mysqli_connect_error();

}

$db = new PDO(
    'mysql:host=localhost;dbname=registration', 'root', '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

?>