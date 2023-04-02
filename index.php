
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>H Store</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<a href="index.php"><img src="img/logo.jpg" alt="logo" width="80px"></a>
				</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="Account.php">Account</a></li>
					<li><p>Hello - xyz</p></li>

					</ul>
				</nav>
			</div>
			<div class="row">
				<div class="col-2">
					<h1>Give Your Work <br> A New Style!</h1>
					<p>Success isn't always about greatness. It's about consistency. Consistent <br> hard work gain
						success. Greatness will come.</p>
					<a href="#" class="btn">Expore Now &#8594;</a>
				</div>
				<div class="col-2">
					<img src="img/shoes1.png" alt="image">
				</div>
			</div>
		</div>
	</div>
	<h2 class="title">Latest Products</h2>
	<div class="row">
		<div class="col-4">
			<img src="img/Shirt.jpg">
			<h4>Red Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>750₹</p>
		</div>
		<div class="col-4">
			<img src="img/Shirt1.jpg">
			<h4>Browon Priented Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>850₹</p>
		</div>
		<div class="col-4">
			<img src="img/Shirt2.jpg">
			<h4>Tfetters printed Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>850₹</p>
		</div>
		<div class="col-4">
			<img src="img/shoes.jpg">
			<h4>Red Shoes</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>2000₹</p>
		</div>

		<div class="row">
			<div class="col-4">
				<img src="img/Shirt3.jpg">
				<h4>Blue Shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>950₹</p>
			</div>
			<div class="col-4">
				<img src="img/shoes.jpeg">
				<h4>Red Priented T-Shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>2050₹</p>
			</div>
			<div class="col-4">
				<img src="img/Shirt7.jpg">
				<h4>Green Printed Shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>950₹</p>
			</div>
			<div class="col-4">
				<img src="img/shoes1.jpeg">
				<h4>White Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>1050₹</p>
			</div>
		</div>
	</div>
	</div>

	<!---------------------footer--------------------------->
<?php include'footer.php';?>
	<!------------js for toggle menu----------->
	<script>
		var MenuItems = document.getElementById('MenuItems');
		MenuItems.style.maxHeight = "0px";

		function menutoggle() {
			if (MenuItems.style.maxHeight == "0px") {
				MenuItems.style.maxHeight = "200px";
			} else {
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>

</body>

</html>