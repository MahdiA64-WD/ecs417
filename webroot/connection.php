<?php

$dbhost = "MYSQL_SERVICE_HOST";
$dbuser = "DATABASE_USER";
$dbpass = "DATABASE_PASSWORD";
$dbname = "ecs417";

if(!$con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
