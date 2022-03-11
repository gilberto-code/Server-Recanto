<?php
header("Content-type: text/html; charset=utf-8");
$_SERVER['RDS_HOSTNAME'] = "database-recanto01.cnjmjy9kebcg.sa-east-1.rds.amazonaws.com";
$_SERVER['RDS_PORT'] = "3306";
$_SERVER['RDS_DB_NAME'] = "dbRecanto01";
$_SERVER['RDS_USERNAME'] = "admin";
$_SERVER['RDS_PASSWORD'] ="senhateste";



$conn = new mysqli($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

?>