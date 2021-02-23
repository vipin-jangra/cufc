<?php
include('connection.php');
session_start();
if($_GET["name"]=="campus")
{
	$_SESSION["cname"]="campus";
$sql = "SELECT id,shop_name from campus";
}
else
{
	$_SESSION["cname"]="hostels";
	$sql = "SELECT id,shop_name from hostels";
}
$result = $conn->query($sql);
$shops=array();
if ($result->num_rows > 0) {
  // output data of each row
 
  while($row = $result->fetch_assoc()) {
	
    
	$shops[]= $row["shop_name"];
	
	
  }

} 

else {
  echo "0 results";
}


$conn->close();
?>