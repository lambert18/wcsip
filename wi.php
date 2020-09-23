<?php
include_once("pass.php");
$c=$_GET["c"];
$con=mysql_connect($host,$usr,$psw,$db);
$res=mysql_query($con, "INSERT INTO ksb (msg) VALUES ('$c')");
if($res) echo $c. " is successfull writen into database table";
else echo "error";