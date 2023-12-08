<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Digistore</title>
	<link rel="icon" type="image/x-icon" href="Bilder/Digistore-logos/Digistore-logos_white.png">
</head>

<body class="scroll">

	<div class="head">
		<button type="button" class="collapsible">Menu</button>
		<header>
			<img id="Logo" src="Bilder/Digistore-logos/Digistore-logos_white.png" alt="Digistore-logos">
			<a href="Index.html">Home</a>
			<a href="VRs.html">VR</a>
			<a href="VR-Accessory.html">VR-Accessory</a>
			<a href="Cameras.html">Camera</a>
			<a href="Camera-Accessory.html">Camera-Accessory</a>
			<a href="Hardware&Software.html">Hardware/Software</a>
			<a id="CA" href="Cart.html"><img src="Bilder/Cart-white.png" alt="cart" id="cart">
				<p>Cart</p>
			</a>
		</header>
	</div>

	<button id="dark" onclick="dark()">Dark</button>
	<button id="Login"><a href="index.php">Login</a></button>
	<div class="contain">
		<h2>Login:</h2>
		<form action="login.php" method="post">
			<label for="username"><b>Username:</b></label> <br/>
			<input type="text" name="username" placeholder="username" required><br />
			<label for="password"><b>Password:</b></label> <br/>
			<input type="password" name="password" placeholder="password" required><br />
			<label for="email"><b>Email:</b></label> <br/>
			<input type="text" name="Email" placeholder="email" required><br />

			<input class="button" type="submit" value="Login"><br />
		</form>
		<p>Eller klikk <a href="register.php">her</a> for å registrere ny bruker

	</div>


</body>

</html>
<?php

?>