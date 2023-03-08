<?php

$Host = "localhost";
$User = "root";
$Password = "";
$Name = "MVCTask";

if(!$Connection = mysqli_connect($Host,$User,$Password,$Name))
{

	die("failed to connect!");
}
