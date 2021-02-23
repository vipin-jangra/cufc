<?php
function cartitems()
{
	if(isset($_POST["add"])){
			echo $_POST['id'];
		}
	
}
echo cartitems();

?>