<?php
include "global.php";

session_destroy();
header("location: signin.php");
?>