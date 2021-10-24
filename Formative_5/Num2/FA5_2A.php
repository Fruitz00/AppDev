<!-- #1A. Using $_GET -->

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	

	<!-- STYLE SHEET -->
	<link rel="stylesheet" href="2Astyle.css" />
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

	<title>FA5 - 2A</title>

	</head>
	
	<body> 
		<div class = "box">
				<h1> FA5 - 2A / Cookies </h1> 

			<hr>

			<div class = "innerbox">
				<div class = "result">
    			
    			<form action ="" method="GET">
    				<label for = "Fname"> First Name: </label>
		 			 <input type="text" name="Fname" value="<?php if (isset($_GET['Fname'])) echo $_GET['Fname']; ?>"/> <br><br>

    				<label for = "Mname"> Middle Name:</label>
					 <input type="text" name="Mname"value="<?php if (isset($_GET['Mname'])) echo $_GET['Mname']; ?>"/> <br><br>

    				<label for = "Lname"> Last Name:</label>
					 <input type="text" name="Lname"value="<?php if (isset($_GET['Lname'])) echo $_GET['Lname']; ?>"/> <br><br>

    				<label for = "DoB"> Date of Birth:</label>
					 <input type="text" name="DoB"value="<?php if (isset($_GET['DoB'])) echo $_GET['DoB']; ?>"/> <br><br>

    				<label for = "Address"> Address:</label>
					 <input type="text" name="Address"value="<?php if (isset($_GET['Address'])) echo $_GET['Address']; ?>"/> <br><br>

					 <input type="submit" value="Submit" name ="submit"> <br><br>
					 </form>
					
					<p> 
						<?php
							if (isset($_GET['Fname'], $_GET['Mname'], $_GET['Lname'], $_GET['DoB'], $_GET['Address']))
							{
								$Fname = $_GET['Fname'];
								$Mname = $_GET['Mname'];
								$Lname = $_GET['Lname'];
								$DoB = $_GET['DoB'];
								$Address = $_GET['Address'];
							
								echo "<br>";
								echo "First Name:"."  ".$Fname;
								echo "<br>";
								echo "Middle Name:"."  ".$Mname;
								echo "<br>";
								echo "Last Name:"."  ".$Lname;
								echo "<br>";
								echo "Date of Birth:"."  ".$DoB;
								echo "<br>";
								echo "Adress:"."  ".$Address;

								setcookie("fcookie", $Fname, time()+10);
								setcookie("mcookie", $Mname, time()+20);
								setcookie("lcookie", $Lname, time()+30);
								
								echo "<pre>"; print_r($_COOKIE); echo "</pre>";
							}
						
						?>
					</p>
    			</div>
			</div> <!-- eof  nnerbox -->		
				<div class = "button">
					<button type = "button" class = "back"> <a href = "../index.php"> Back to Index page  </a></button>
				</div> <!-- eof button -->

</div> <!-- eof box -->


	</body>
	</html>