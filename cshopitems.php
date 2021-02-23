<?php
include('connection.php');
session_start();
$camp=$_SESSION["cname"];
$shop=$_SESSION["name"];

$v=strval(trim($shop));

if($camp=="campus")
{
	$s="c";
}
else
{
	$s="h";
}

$sql = "SELECT * from $s$v";
$result = $conn->query($sql);






$conn->close();
?>