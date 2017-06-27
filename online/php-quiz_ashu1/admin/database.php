<?php
error_reporting(1);
$cn=mysqli_connect("localhost","root","vchip") or die("Could not Connect My Sql");
mysqli_select_db($cn, "user")  or die("Could connect to Database");
?>
