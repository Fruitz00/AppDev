<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.">
	<title> Two number combinations </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class = "layout">
		<div class = "upper">
				<?php
				echo "<h2>Possible two digit combinations</h2>";
				?>
		</div>	
			<div class = "lower">
				<div class ="box">
					<div class = "imageBox"><img src = "photos/mntn.jpg">
						<div class = "innerbox">
							<div class = "text">
								<?php		
									for ($x = 0; $x < 10; $x++)
										for ($y  = 0; $y <10; $y++)
											echo "$x$y, ";
								?>
							</div>
						</div>	
					</div>
				</div>
			</div>		
	</div>
</body>
</html>	