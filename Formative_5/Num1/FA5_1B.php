<!-- #1B. Using $_POST -->

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	

	<!-- STYLE SHEET -->
	<link rel="stylesheet" href="1Bstyle.css" />
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

	<title>FA5 - 1B</title>

	</head>
	
	<body> 
		<div class = "box">
				<h1> FA5 - 1B </h1> 

			<hr>

			<div class = "innerbox">
				<div class = "result">
    			
    			<form action ="" method="POST">
    				<label for = "Fname"> First Name: </label>
		 			 <input type="text" name="Fname" value="<?php if (isset($_POST['Fname'])) echo $_POST['Fname']; ?>"/> <br><br>

    				<label for = "Mname"> Middle Name:</label>
					 <input type="text" name="Mname"value="<?php if (isset($_POST['Mname'])) echo $_POST['Mname']; ?>"/> <br><br>

    				<label for = "Lname"> Last Name:</label>
					 <input type="text" name="Lname"value="<?php if (isset($_POST['Lname'])) echo $_POST['Lname']; ?>"/> <br><br>

    				<label for = "DoB"> Date of Birth:</label>
					 <input type="text" name="DoB"value="<?php if (isset($_POST['DoB'])) echo $_POST['DoB']; ?>"/> <br><br>

    				<label for = "Address"> Address:</label>
					 <input type="text" name="Address"value="<?php if (isset($_POST['Address'])) echo $_POST['Address']; ?>"/> <br><br>

					 <input type="submit" value="Submit" name ="submit"> <br><br>
					 </form>
					
					<p> 
						<?php
							if (isset($_POST['Fname'], $_POST['Mname'], $_POST['Lname'], $_POST['DoB'], $_POST['Address']))
							{
								$Fname = $_POST['Fname'];
								$Mname = $_POST['Mname'];
								$Lname = $_POST['Lname'];
								$DoB = $_POST['DoB'];
								$Address = $_POST['Address'];
							
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