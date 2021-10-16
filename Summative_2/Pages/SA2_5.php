<?php
	$string = " an online guide to html form &#60input&#62 tag ";
	$strToArr = explode("*", $string);

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	
	<link rel="stylesheet" href="style5.css"/>
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>


	<title>SA2 - 5</title>

	</head>
	
	<body> 

		<div class = "box">
			<div class = "header">
				<h1>SA2 - 5</h1> 
			</div> 

			<hr>

			<div class = "innerbox">
				<div class = "result">
					<table >
						<tr>
							<th class = "numcol">NO.</th>
							<th>DESCRIPTION</th>
							<th>OUTPUT</th>
						</tr>

						<tr>
							<td class = "numcol">1.</td>
							<td>Original value of String</td>
							<td>*<?php echo $string?>*</td>
						</tr>	

						<tr>
							<td class = "numcol">2.</td>
							<td>Number of characters</td>							
							<td>*<?php echo strlen($string);?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">3.</td>
							<td>Number of words</td>
							<td>*<?php echo str_word_count($string);?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>	

						<tr>
							<td class = "numcol">4.</td>
							<td>First character to uppercase</td>
							<td>*<?php echo ucfirst($string);?>*</td>
						</tr>	

						<tr>
							<td class = "numcol">5.</td>
							<td>First character of each word to uppercase</td>							
							<td>*<?php echo ucwords($string);?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">6.</td>
							<td>To lowercase</td>
							<td>*<?php echo strtolower($string);?>*</td>
						</tr>

						<tr>
							<td class = "numcol">7.</td>
							<td>To uppercase</td>
							<td>*<?php echo strtoupper($string);?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>	

						<tr>
							<td class = "numcol">8.</td>
							<td>Without Leading Spaces</td>
							<td>*<?php echo ltrim($string);?>*</td>
						</tr>	

						<tr>
							<td class = "numcol">9.</td>
							<td>Without Trailing Spaces</td>
							<td>*<?php echo rtrim($string);?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">10.</td>
							<td>Without Leading and Trailing Spaces</td>
							<td>*<?php echo trim($string);?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>


						<tr>
							<td class = "numcol">11.</td>
							<td>MD5 value of string</td>						
							<td>*<?php echo md5($string);?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">12.</td>
							<td>Base 64 Value of String</td>
							<td>*<?php echo base64_encode($string);?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>

						<tr>
							<td class = "numcol">13.</td>
							<td>First 16 characters</td>
							<td>*<?php echo substr($string,16);?>*</td>
						</tr>	

						<tr>
							<td class = "numcol">14.</td>
							<td>Last 4 characters</td>							
							<td>*<?php echo substr($string,-4);?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">15.</td>
							<td>4 Characters starting from the 20th Position</td>
							<td>*<?php echo substr($string,20,4);?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>

						<tr>
							<td class = "numcol">16.</td>
							<td>Position of the word "guide"</td>							
							<td>*<?php echo strpos($string,"guide");?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">17.</td>
							<td>Position of the word "UE"</td>
							<td>*<?php $exists = True;
								 	strpos($string,"UE");
									if (strpos($string, "UE") == false){
										echo 'bool(false)';
									} else {
										echo strpos($string, "UE");
									}
							?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>

						<tr>
							<td class = "numcol">18.</td>
							<td>"HTML" word in uppercase</td>							
							<td>*<?php echo strtoupper(substr($string,20,4));?>*</td>
						</tr>		

						<tr>
							<td class = "numcol">19.</td>
							<td>"&#60INPUT&#62" word in uppercase</td>
							<td>*<?php echo strtoupper(substr($string,30,13));?>*</td>
						</tr>

						<tr>
							<td colspan = 3></td>
						</tr>

						<tr>
							<td class = "numcol">20.</td>
							<td>String converted to array</td>
							<td><?php
								$arra = explode(' ', $string);
								foreach($arra as $i){
									echo '*'.$i.'*<br>';
								}
							?></td>
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