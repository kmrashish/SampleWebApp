<?php

$database="database1";
$username="root1";
$password="a";
$hostname="localhost";

mysql_connect($hostname,$username,$password);
mysql_select_db($database);
session_start();
?>