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

	<?php include 'header.php'; ?>
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
							<span onclick="login()">Login</span>
							<span onclick="register()">Register</span>

							<hr id="Indicator">
						</div>
						<form id="RegForm" action="signup_cheak.php" method="post">
							<input name="username" type="text" placeholder="Name">
							<input name="Email" type="email" placeholder="Email">
							<input name="password" type="password" placeholder="Password">
							<button name="signup" type="submit" class="btn">Register</button>
						</form>
						<form id="LoginForm" action="login_cheak.php" method="post">
							<input name="email" type="email" placeholder="Email">
							<input name="password" type="password" placeholder="Password">
							<button type="submit" class="btn" name="login">Login</button>
							<a href="#">Forgot password</a>
						</form>


					</div>
					<div class="">
						<button class="btn" name="logout"><a href="logout.php">Logout</a></button>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!---------------------footer--------------------------->
	<?php include 'footer.php'; ?>

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
	<!------------js for toggle form----------->
	<script>
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indicator = document.getElementById("Indicator");

		function register() {
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(100px)";
		}

		function login() {
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indicator.style.transform = "translateX(0px)";
		}
	</script>
</body>

</html>