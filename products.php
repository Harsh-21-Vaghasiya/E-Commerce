<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>H Store</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<?php include 'header.php';?>

	<div class="small-container">

		<div class="row">
			<div class="col-4">
				<img src="img/t-shirt1.jpeg">
				<h4>blue priented T-Shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>550₹</p>
			</div>
			<div class="col-4">
				<img src="img/shoes4.jpg">
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
				<img src="img/shoes3.jpg">
				<h4>Black Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>1000₹</p>
			</div>
		</div>
		<div class="row">

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

		</div>


		
	</div>

	<!---------------------footer--------------------------->
	<?php include 'footer.php';?>
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