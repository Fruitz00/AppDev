<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	
	<link rel="stylesheet" href="style3.css"/>
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>


	<title>SA2 - 3</title>

	</head>
	
	<body> 
		<?php
			$cubeSide_Val = 5;

			$rrPrismL_Val = 5;
			$rrPrismW_Val = 8;
			$rrPrismH_Val = 7;

			$Pr_CyA_Val = 40;
			$Pr_CyH_Val = 8;

			$Py_CoA_Val = 36;
			$Py_CoH_Val = 8;

			$sphereR_Val = 9;
		?>

		<div class = "box">
			<div class = "header">
				<h1>SA2 - 3</h1> 
			</div> 

			<hr>

			<div class = "innerbox">
				<div class = "result">
					<table >
						<th colspan="4"> VOLUME OF SHAPES </th>

						<tr>
							<th>SHAPE</th>
							<th>VALUE(S)</th>
							<th>FORMULA</th>
							<th>ANSWER</th>
						</tr>

						<!-- CUBE -->
						<tr>
							<td>Cube</td>
							<td>
								<?php
									echo "Side (s) = ".$cubeSide_Val;
								?>
							</td>
							<td>V = s<sup>3</sup></td>
							<td>
								<?php
									function cubeVol($x) {
										return pow($x, 3);
									}

									echo(cubeVol($cubeSide_Val));
								?>
							</td>
						</tr>	

						<!-- RIGHT RECTANGULAR PRISM -->
						<tr>
							<td>Right Rectangular Prism</td>
							<td> 
								<?php
									echo "Length (L) = ". $rrPrismL_Val. "<br>";
									echo "Width (W) = ". $rrPrismW_Val. "<br>";
									echo "Height (H) = ". $rrPrismH_Val. "<br>";
								?>
							</td>
							<td>V = LWH</td>
							<td>
								<?php
									function rrPrismVol($x, $y, $z) {
										return $x * $y * $z;
									}

									echo(rrPrismVol($rrPrismL_Val, $rrPrismW_Val, $rrPrismH_Val));
								?>
							</td>
						</tr>		

						<!-- PRISM or CYLINDER-->
						<tr>
							<td>Prism or Cylinder</td>
							<td> 
								<?php
									echo "Area (A) = ". $Pr_CyA_Val. "<br>";
									echo "Height (h) = ". $Pr_CyH_Val. "<br>";
								?>
							</td>
							<td>V = Ah</td>
							<td>
								<?php
									function Pr_CyVol($x, $y) {
										return $x * $y;
									}

									echo(Pr_CyVol($Pr_CyA_Val, $Pr_CyH_Val));
								?>
							</td>
						</tr>	

						<!-- PYRAMID or CONE-->
						<tr>
							<td>Pyramid or Cone</td>
							<td> 
								<?php
									echo "Area (A) = ". $Py_CoA_Val. "<br>";
									echo "Height (h) = ". $Py_CoH_Val. "<br>";
								?>
							</td>
							<td>V = (Ah) / 3</td>
							<td>
								<?php
									function Py_CoVol($x, $y) {
										return ($x * $y)/3;
									}

									echo(Py_CoVol($Py_CoA_Val, $Py_CoH_Val));
								?>
							</td>
						</tr>	

						<!-- SPHERE -->
						<tr>
							<td>Sphere</td>
							<td> 
								<?php
									echo "Radius (r) = ". $sphereR_Val;
								?>
							</td>
							<td>V = (4<span style = "font-family:'Droid Sans">&#960;</span>r<sup>3</sup>) / 3</td>
							<td>
								<?php
									function sphereVol($x) {
										return number_format((float)((4*(pi() )* pow($x,3))/3), 2, '.', '');
									}

									echo(sphereVol($sphereR_Val));
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