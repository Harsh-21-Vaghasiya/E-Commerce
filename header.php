<?php
session_start();
?>
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
					<li><p>Hello - <?php echo $_SESSION['name'] ?></p></li>
					

				</ul>
			</nav>
		</div>
		
	</div>
</div>
