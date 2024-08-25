<?php require("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grid</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
</head>

<body>
	<div class='wrapper'>
		<?php require "includes/nav.include.php"; ?>
	<div class='container'>
		
		<div class='product first'>
			First Item
		</div>

		<aside class='product aside'>
				
				<div class='aside-item'>
						First Aside
				</div>

				<div class='aside-item'>
						Second Aside
				</div>
		</aside>
		


	</div>

	
<footer class='footer'>
	<div class='contact-links'>
		<h4>Contact links</h4>

		<p><strong>Address:</strong> <small>2nd floor, 143 Ojuelegba Road, by Karimu Street</small></p>

		<p><strong>Mail Us:</strong> <small>deftcc@deft-rains.com</small></p>

		<p><strong>Phone:</strong> <small>+234 (0) 8061597138</small></p>
	
	</div>

	<div class='quick-links'>
		<h4>Quick links</h4>

		<ul>
			<li>Home</li>
			<li>About Us</li>
			<li>Training</li>
			<li>Solutions</li>
			<li>Certifications</li>
		</ul>

	</div>

	<div class='newsletter-links'>
		<h4>Newsletter</h4>
		<div class='subscription'>
			<input type='search' placeholder="Enter email address">
			<button class='btn btn-subscribe'>OK</button>
		</div>
	</div>

</footer>
</div>

<script src='js/grid.js'></script>
</body>

</html>