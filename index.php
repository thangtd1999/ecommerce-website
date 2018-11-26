<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-commerce Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" type="text/css" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div id="top"> <!-- Top Begin -->
		<div class="container"><!-- container Begin -->
			<div class="col-md-6 offer"> <!-- col-md-6 offer Begin-->
				<a href="#" class="btn btn-success btn-sm">Welcome</a>
				<a href="checkout.php"> 4 Items in your Cart | Total Prices: $300</a>
			</div> <!-- col-md-6 offer Finish -->
			<div class="col-md-6"> <!-- col-md-6 Begin -->
				<ul class="menu"> <!-- menu Begin -->
					<li>
						<a href="customer_register.php">Register</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Go To Cart</a>
					</li>
					<li>
						<a href="checkout.php">Login</a>
					</li>
				</ul> <!-- menu Finish -->
			</div> <!-- col-md-6 Finish -->
		</div> <!-- container Finish -->
	</div> <!-- Top Finish -->
	
	<div id="navbar" class="navbar navbar-default"> <!-- navbar navbar-default Begin -->

		<div class="container"> <!-- container Begin -->

			<div class="navbar-header"> <!-- navbar-header Begin -->

				<a href="index.html" class="navbar-brand home"> <!-- navbar-brand home Begin  -->

					<img src="images/ecom-store-logo.png" alt="" class="hidden-xs">
					<img src="images/ecom-store-logo-mobile.png" alt="" class="visible-xs">

				</a> <!-- navbar-brand home Finish -->

				<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

					<span class="sr-only">Toggle Navigation</span>

					<i class="fa fa-align-justify"></i>

				</button>

				<button class="navbar-toggle" data-toggle="collapse" data-target="#search">

					<span class="sr-only">Toggle Search</span>

					<i class="fa fa-search"></i>

				</button>

			</div> <!-- navbar-header Finish -->

			<div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Begin -->

				<div class="padding-nav"> <!-- padding-nav Begin -->

					 <ul class="nav navbar-nav left">  <!-- nav navbar-nav left Begin
					 	 -->
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">Shop</a>
						</li>
						<li>
							<a href="checkout.php">My Account</a>
						</li>
						<li>
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					 </ul> <!-- nav navbar-nav left Finish -->

				</div> <!-- padding-nav Finish -->

				<a href="cart.html" class="btn navbar-btn btn-primary right"> <!-- btn navbar-btn btn-primary right Begin -->

					<i class="fa fa-shopping-cart"></i>

					<span>4 Items In Your Cart</span>

				</a> <!-- btn navbar-btn btn-primary right Finish -->
				
				<div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right Begin -->

					<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!-- btn btn-primary navbar-btn Begin -->

						<span class="sr-only">Toggle Search</span>
							
						<i class="fa fa-search"></i>

					</button> <!-- btn btn-primary navbar-btn Finish -->

				</div> <!-- navbar-collapse collapse right Finish -->
				
				<div class="collapse clearfix" id="search"> <!-- collapse clearfix Begin -->
					
					<form method="get" action="results.php" class="navbar-form"> <!-- navbar-form Begin -->
						
						<div class="input-group"> <!-- input-group Begin -->
							
							<input type="text" class="form-control" placeholder="Search" name="user_query" required>
							
							<span class="input-group-btn"> <!-- input-group-btn Begin -->
								
							<button type="submit" name="search" value="Search" class="btn btn-primary">
								
								<i class="fa fa-search"></i>

							</button>

							</span> <!-- input-group-btn Finish -->

						</div> <!-- input-group Finish -->


					</form> <!-- navbar-form Finish -->

				</div> <!-- collapse clearfix Finish -->

			</div> <!-- navbar-collapse collapse Finish -->

		</div> <!-- container Finish -->

	</div> <!-- navbar navbar-default Finish -->
	
	<div class="container" id="slider"> <!-- container begin -->

		<div class="col-md-12"> <!-- col-md-12 Begin -->

			<div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide Begin -->
				
				<ol class="carousel-indicators"> <!-- arousel-indicators Begin -->
					
					<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>

				</ol> <!-- arousel-indicators Finish -->
				
				<div class="carousel-inner"> <!-- carousel-inner Begin -->
					
					<div class="item active">
						
						<img src="admin_area/slides_images/slide-1.jpg" alt="">

					</div>

					<div class="item">
						
						<img src="admin_area/slides_images/slide-2.jpg" alt="">

					</div>

					<div class="item">
						
						<img src="admin_area/slides_images/slide-3.jpg" alt="">

					</div>

					<div class="item">
						
						<img src="admin_area/slides_images/slide-4.jpg" alt="">

					</div>

				</div> <!-- carousel-inner Finish -->

				<a href="#myCarousel" class="left carousel-control" data-slide="prev">  <!-- left carousel-control Begin -->
					
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>

				</a> <!-- left carousel-control Finish -->


				<a href="#myCarousel" class="right carousel-control" data-slide="next">  <!-- left carousel-control Begin -->
					
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>

				</a> <!-- left carousel-control Finish -->


			</div> <!-- carousel slide Finish -->

		</div> <!-- col-md-12 Finish -->

	</div> <!-- container finish -->
	
	<div id="advantages"> <!-- adventages Begin -->
		
		<div class="container"> <!-- container Begin -->
			
			<div class="same-height-row"> <!-- same-height-row Begin -->
				
				<div class="col-sm-4"> <!-- col-sm-4 Begin -->
					
					<div class="box same-height"> <!-- box same-height Begin -->
						
						<div class="icon"> <!-- icon Begin -->
							
							<i class="fa fa-heart"></i>
							
						</div> <!-- icon Finish -->
						
						<h3><a href="#">Best offer</a></h3>

						<p>We know to provide the best possible service over.</p>

					</div> <!-- box same-height Finish -->

				</div> <!-- col-sm-4 Finish -->

				<div class="col-sm-4"> <!-- col-sm-4 Begin -->
					
					<div class="box same-height"> <!-- box same-height Begin -->
						
						<div class="icon"> <!-- icon Begin -->
							
							<i class="fa fa-tag"></i>
							
						</div> <!-- icon Finish -->
						
						<h3><a href="#">Best Prices</a></h3>

						<p>Compare us with another site, who have the best prices.</p>

					</div> <!-- box same-height Finish -->

				</div> <!-- col-sm-4 Finish -->

				<div class="col-sm-4"> <!-- col-sm-4 Begin -->
					
					<div class="box same-height"> <!-- box same-height Begin -->
						
						<div class="icon"> <!-- icon Begin -->
							
							<i class="fa fa-thumbs-up"></i>
							
						</div> <!-- icon Finish -->
						
						<h3><a href="#">100% Original</a></h3>

						<p>We just offer you the best and original products.</p>

					</div> <!-- box same-height Finish -->

				</div> <!-- col-sm-4 Finish -->
				


			</div> <!-- same-height-row Finish -->
			

		</div> <!-- container Finish -->


	</div> <!-- adventages Finish -->

	<div id="hot"> <!-- hot Begin -->
		
		<div class="box"> <!-- box Begin -->
			
			<div class="container"> <!-- container Begin -->
				
				<div class="col-md-12"> <!-- col-md-12 Begin -->
					
					<h2>
						Our Lastest Products
					</h2>


				</div> <!-- col-md-12 Finish -->
				

			</div> <!-- container Finish -->

		</div> <!-- box Finish -->

	</div> <!-- hot Finish -->
 	
	<div id="content" class="container"> <!-- container Begin -->
		
		<div class="row"> <!-- row Begin -->
			
			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->

			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->

			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->

			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->

			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->
				
			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->

			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->

			<div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
				
				<div class="product"> <!-- product Begin -->
					
					<a href="details.php">
						
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">

					</a>

					<div class="text"> <!-- text Begin -->
						
						<h3>	
							<a href="details.php">
								T-Shirt
							</a>
						</h3>

						<p class="price">$30</p>

						<p class="button">
							
							<a href="details.php" class="btn btn-default">View Details</a>

							<a href="details.php" class="btn btn-primary">
								
								<i class="fa fa-shopping-cart">
									
									Add To Cart

								</i>

							</a>

						</p>

					</div> <!-- text Finish -->

				</div> <!-- product Finish -->

			</div> <!-- col-sm-4 col-sm-6 single Finish -->


		</div> <!-- row Finish -->

	</div> <!-- container Finish -->

	<?php  

	include("includes/footer.php");

	?>

	<script type="text/javascript" src="js/jquery-331.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-337.min.js"></script>
</body>
</html>