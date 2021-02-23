<?php
include_once('trying.php');

?>


<html>
	<head>
		<title><?php echo $_GET["name"];?></title>
			<link rel="stylesheet" type="text/css" href="css/camp.css"/>
			<link rel="stylesheet" type="text/css" href="dhtmlxcalendar.css"/>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body id="body">
	
		<div id="holder"><img id="img" src="images/22.png" width="150px" height="70px"/></div>
		<div id="header" >
			 
			<ul>
				<li><a href="login.html">Login</a></li>
				<li><a href="overview.html">Contact Us</a></li>
				<li><a href="index.php#services">Services</a></li>
				<li><a href="index.php#about">About</a></li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div><!--header -->
		<br>
		<br>
		<br>
		<br>
		
		
		<div class="container">
			<div class="container-inner">
				<div class="blocks">
					<?php 
						for($i=0;$i<$result->num_rows;$i++)
						{
							echo'<div class="block">
								<a href="shops.php" id="text"><h1>'
					?>
								
					<?php 
						$name=$shops[$i]; echo $name;   echo '</h1></a>';
					?>
								<?php
									if(isset($_GET["submit"]))
									{
										$name=$_GET["name"];
									
									}
								?>
						
					<?php 	echo'			<form action="shops.php" method="get"> 
									<input type="hidden" value="';
					?>
					<?php echo $shops[$i]; ?>
					<?php echo '" name="name">
									<input type="submit" value="View more" name="submit">
								</form>
								
								</div>
							';
						}
					?>
					
				</div>
			
			</div>
		
		</div>
		
		
		
	
	</body>

</html>