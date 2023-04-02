<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Products - H Store | Ecommerce Website Design</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php include 'header.php';?>
<!-----------------account-page------------------>
	<div class="account-page">
		<div class="container">
			<div class="row">
			<div class="col-2">
				<img src="img/shoes1.png">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Feedback</span>

						<hr class="ndicato">
					</div>
					
					<form action="contact_cheak.php" method="post">
                        <textarea rows="10" cols="25"></textarea>
						<button type="submit" class="btn" name="contact">Submit</button>
						
					</form>

					
				</div>
				
			</div>
		</div>
	</div>
</div>
  	
	<!---------------------footer--------------------------->
	<?php include 'footer.php';?>

	<!------------js for toggle menu----------->
	<script >
		var MenuItems = document.getElementById('MenuItems');
		MenuItems.style.maxHeight = "0px";

		function menutoggle() {
			if(MenuItems.style.maxHeight == "0px"){
				MenuItems.style.maxHeight = "200px";
			}else{
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>
	<!------------js for toggle form----------->
	<script>
		var LoginForm = document.getElementById("LoginForm");
		var Indicator = document.getElementById("Indicator");

		


	</script>
</body>
</html>