<?php
$username="root2";
$password="a";
$hostname="localhost";
$database = 'user';
$conerror = 'no connection';

mysql_connect($hostname,$username,$password);
mysql_select_db($database);
session_start();
?>


