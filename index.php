<!DOCTYPE>
<html>
<head>
<title>Hotel Management</title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link rel="stylesheet" type="text/css" href="dhtmlxcalendar.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	



</head>
<body>
	<div id="holder"><img id="img" src="images/22.png" width="150px" height="70px"/></div>
		<div id="header">
			 
			<ul>
				<li><a href="login.html">Login</a></li>
				<li><a href="overview.html">Contact Us</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div><!--header -->
		<br>
		<br>
		<br>
		<br>
		<div id="aa">
		
			
			<div class="centered">WELCOME
				<p>“Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious”</p>
			</div>
			
		</div>
		
		
		<div id="about">
		<br>
		<hr>
					<div  id='ctext'>
								<center>
									<h1>ABOUT </h1>
									"Chandigarh University Food Corner is namely as a CUFC. Here a team is working togethr to help the students
									in getting the good food facility by giving the all descriptions of all food corners available in Chandigarh
									University."
									
								</center>
					</div>
			<img src="images/22.png" width="40%" height="80%" id="log">
			
		
		</div>
		<br>

		
				
					  <div id="services" class="divisions">
							<br>
					  		<hr>
							<br>
							
							<div  id='ctext'>
								<center>
									<h1>CAMPUS</h1>
									"It helps you in getting about the shops in campus of Chandiagrh University. where they are exactly
									located in the campus. how many shops are there in campus.which food item is available of different shops. "
									
								</center>
								</div>
							
			
							<div class="zoom">
								
								<button class="bb"style="width:100%;height:100%;"><div class="overlay">
									<div class="text">
									<?php
									if(isset($_GET["submit"]))
									{
										$name=$_GET["name"];
									}
								?>
										<h1><form action="campus.php" method="get">
											<input type="hidden" value="campus" name="name">
											<input type="submit" value="Campus" name="campus" style="color:white;background:transparent;border:none;">
										</form></h1>
										
									</div>
								
								</div></button>
								
								
							</div>
							
							<div id='ctext'>
								<center>
									<h1>HOSTELS</h1>
									"It helps you in getting about the shops in hostels of Chandiagrh University. where they are exactly
									located in the hostels. how many shops are there in hostels.which food item is available on different shops. "
									
								</center>
								</div>
							
							
							<div class="zoom1">
								<button class="bb"style="width:100%;height:100%;"><div class="overlay1">
									<div class="text">
										<h1><form action="campus.php" method="get">
											<input type="hidden" value="hostels" name="name">
											<input type="submit" value="Hostels" name="hostels" style="color:white;background:transparent;border:none;">
										</form></h1>
									</div>
								
								</div></button>
							</div>
				
			
						</div>
				
		</div>
		<br>
		<hr>
		<br>
		
		
	</div><!--holder -->
	
	<footer>
		<div class = "container">
			<div class = "row">
					
						<p id="footer">
							<strong>C</strong><span class = "small footerSubtext">handigarh</span>
							<strong>U</strong><span class = "small footerSubtext">niversity</span>
							<strong>F</strong><span class = "small footerSubtext">ood</span>
							<strong>C</strong><span class = "small footerSubtext">orner</span>
							
						</p>
						

			

					
			</div>
						<p>
							<strong>C</strong><span class = "small footerSubtext">ontact</span>
							<strong>U</strong><span class = "small footerSubtext">s:<br></span>
							vipinsandwal10244@gmail.com<br>
							7027850720
						</p>
			<div class = "footcontent"><!--right content-->
						Follow Us:<br>
							<img src = "images/facebook.png">
							<img src = "images/twitter.png">
							<img src = "images/googleplus.png">
							<img src = "images/youtube.png">
					</div>
		</div>
	</footer>
</body>
</html>
