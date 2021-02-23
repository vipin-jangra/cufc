<?php
	 
	 function component($pname,$pprice,$pimage,$id)
	 {
		 $element="
			<div class='col-md-3 col-sm-6 my-3 my-md-0'><form action=\"shops.php\" method=\"post\">
												
								<div class='card shadow'>
									<div >
										<img src='$pimage' class='img-fluid card-img-top' id='imgs' >
									</div>
								</div>
								
								<div class='card-body' >
									<h5 class='card-title'><a>$pname<a> </h5>
									<h5>
										<span class='price'><s class='text-secondary'>199 </s></span>
										<span class='price'>$pprice</span>
									</h5>
									<button type=\"submit\" class=\"btn btn-warning\" name=\"add\" >Add to cart ><i class='fa fa-shopping-cart'></i></button>
									<input type='hidden' name='id' value='$id'>
								</div>
				</form>
			</div>
		 
		 ";
		 
		 echo $element;
	 }


?>