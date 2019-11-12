<?php

$connections = mysqli_connect("localhost", "root", "", "php_season_4");

$db = new PDO(
    'mysql:host=localhost;dbname=php_season_4', 'root', '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

?>