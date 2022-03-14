<?php
header("Content-type: text/html; charset=utf-8");
$_SERVER['RDS_HOSTNAME'] = "";
$_SERVER['RDS_PORT'] = "";
$_SERVER['RDS_DB_NAME'] = "";
$_SERVER['RDS_USERNAME'] = "";
$_SERVER['RDS_PASSWORD'] ="";


$conn = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

?>
