<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.">
	<title> Multiplication Table </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class = frame>
		<?php
		$prod;
			for ($x = 1; $x < 11; $x++){
				for ($y = 1; $y < 11; $y++){
					$prod = $x*$y;
					echo "<div>$prod</div>";
			}}
		?>
	</div>
</body>
</html>