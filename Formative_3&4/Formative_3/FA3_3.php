<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	

	<!-- STYLE SHEET -->
	<link rel="stylesheet" href="3style.css" />
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>


	<title>FA3 3</title>

	</head>
	
	<body> 

		<div class = "box">
			<div class = "header">
				<h1> Formative 3 - 3</h1> 

				<p>  This progrwill display the multiplication table for the number.</p>				
			</div> <!-- eof header -->

			<hr>

			<div class = "innerbox">
				<div class = "result">
					<table >
						<th colspan="2"> Parameter Values: 1 , 2 , 3  
						</th>

						<tr>
							<td>Addition</td>
							<td>
								<?php
									function add($x, $y, $z){
										return $x + $y + $z;
									}

									echo(add(25, 13, 6));
								?>
							</td>
						</tr>

						<tr>
							<td>Suctraction</td>
							<td>
								<?php
									function minus($x, $y, $z){
										return $x - $y - $z;
									}

									echo(minus(25, 13, 6));
								?>
							</td>
						</tr>

						<tr>
							<td>Multiplication</td>
							<td>
								<?php
									function mul($x, $y, $z){
										return $x * $y * $z;
									}

									echo(mul(25, 13, 6));
								?>
							</td>
						</tr>

						<tr>
							<td>Division</td>
							<td>
								<?php
									function divide($x, $y, $z){
										return $x / $y / $z;
									}

									echo(divide(25, 13, 6));
								?>
							</td>
						</tr>						
					</table>
			</div>
			</div> <!-- eof  nnerbox -->		
				<div class = "button">
					<button type = "button" class = "back"> <a href = "../index.php"> Back to Index page  </a></button>
				</div> <!-- eof button -->

</div> <!-- eof box -->


	</body>
	</html>