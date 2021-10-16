<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	

	<!-- STYLE SHEET -->
	<link rel="stylesheet" href="2style.css" />
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>


	<title>FA3 2</title>

	</head>
	
	<body> 
		<?php
			$num = array(1,2,3,4,5,6,7,8,9,10);
		?>

		<div class = "box">
			<div class = "header">
				<h1>Formative 3 - 2</h1> 

				<p>  This progrwill display the multiplication table for the numbers 0 to 10.</p>				
			</div> <!-- eof header -->

			<hr>

			<div class = "innerbox">
				<div class = "result">
					<table >
						<th colspan="2"> Array List: 
							<?php
								for ($x = 0 ; $x < 10; $x++){
									if( $x == 9 ){
										echo $num[$x];
									}
									else{
										echo $num[$x].", ";
									}
								}
							?> 
						</th>

						<tr>
							<td>Addition</td>
							<td>
								<?php
									$sum = 0;
									for ($x = 0; $x < 10 ; $x++){
										$sum += $num[$x];
									}
									echo $sum;
								?>
							</td>
						</tr>

						<tr>
							<td>Suctraction</td>
							<td>
								<?php
									$diff = 0;
									for ($x = 0; $x < 10 ; $x++){
										$diff -= $num[$x];
									}
									echo $diff;
								?>
							</td>
						</tr>

						<tr>
							<td>Multiplication</td>
							<td>
								<?php
									$prod = 1;
									for ($x = 0; $x < 10 ; $x++){
										$prod *= $num[$x];
									}
									echo $prod;
								?>
							</td>
						</tr>

						<tr>
							<td>Division</td>
							<td>
								<?php
									$quo = 1;
									for ($x = 0; $x < 10 ; $x++){
										$quo /= $num[$x];
									}
									echo $quo;
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