<?php
	include('cshopitems.php');
	require_once('./php/component.php');
	
	$_SESSION["name"]=$_GET["name"];
	
	
	
	
?>

<html>
	<head>
		<title><?php echo $_GET["name"]; ?></title>
			<link rel="stylesheet" type="text/css" href="css/shps.css"/>
			
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
			<script type="text/javascript" src="script/search.js">
			
			</script>
	</head>
	
	<body>
		<div id="holder"><img id="img" src="images/22.png" width="150px" height="70px"/> </div>
		
		<div id="header">
			 
			<ul>
				<li><a href="login.html">Login</a></li>
				<li><a href="overview.html">Contact Us</a></li>
				<li><a href="index.html#services">Services</a></li>
				<li><a href="index.html#about">About</a></li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div><!--header -->
		<br>
		<br><br>
		
		
		<div id="menu">
			<div id="menu_items">
				<i class="fa fa-user-circle-o" style="font-size:50px;margin:10px;color:white;"></i>
				<div class="search-container">
					<form>
					  <input type="text" placeholder="Search.." name="search" value="" autocomplete="off" id="myinput" onkeyup="searchFunction()">
					  
					</form>
				</div>
			</div>
			
			
			<div id="rightside">
				
			</div>
		
			<div id="outeritems">
				
					
					<div  class="container" id='box' >
						<div class="row text-center py-5">
						<?php
						
						
						
						
						if ($result->num_rows > 0) {
							// output data of each row
							while ($row = $result -> fetch_assoc()) {
							component($row['pname'],$row['pprice'],$row['pimage'],$row['id']);
     
	
		
	
						}
 
  
						} 
						else {
							echo "empty result";
						}
						
							
							
						?>
						</div>
					</div>
						
				
			</div>
			
			
		
		</div>
		
		
		
		

	
	
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>