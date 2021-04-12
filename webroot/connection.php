<?php

$dbuser = "DATABASE_USER";
$dbpass = "DATABASE_PASSWORD";
$dbname = "ecs417";

if(!$con = mysqli_connect($dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
