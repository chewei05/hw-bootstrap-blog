<?php
// PDO Setting
$db_type = "mysql";
$db_host = "localhost";
$db_port = "33060";
$db_name = "blog";
$db_user = "root";
$db_pass = "root";
// Data Source Name
$dsn = $db_type.":host=".$db_host.";port=".$db_port.";dbname=".$db_name;

$initial_command = "SET NAMES utf8"; // Database Collation
try {
   $pdo = new PDO($dsn, $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => $initial_command));
} catch(PDOException $e) {
   $varErrorMsg = $e->getMessage();
}

?>
