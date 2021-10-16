<?php
	session_start();
	$lastName = '';
	$firstName = '';
	$middleName = '';
	$suffix = '';
	$sex = '';
	$date = date('m/d/Y');
	$age = '';
	$student_number = '';
	$pronoun = '';

	#Contact Info
	$contactNo = '';
	$telNo = '';
	$email = '';
	$parent_guardian = '';
	$parentContact = '';
	$relationshipWithGuardian = '';
	$address = '';
	$city = '';
	$region = '';
	$country = '';
	$postal = '';

	#Previous School
	$nameOfSchool = '';
	$lastYearAttended = '';
	$schoolAddress = '';
	$languageOfInstruction = '';
	$gwa = '';
	$reasonForTransfer = '';
?>

<html>
	<head>
		<title>Resume</title>
		<link rel="stylesheet" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
	</head>
<form action = 'output.php' method = 'post'>
<body>
	<div class="mainBox"> <!-- main box start -->
		<div class="titleBox" align="center"> <!-- title box start -->
			<h1>Student Information</h1>
		</div> <!-- title box end -->
		<div class="box1"> <!-- box 1 start -->
			<div class="sectionBox" style= "text-align: center;"> Personal Information</div> <!-- section box 1 -->

			<!-- for labels start -->
			<div class="labelBox" style="top: 47; left: 9; width: 91px; height: 30px; ">Last Name:</div>
			<div class="labelBox" style="top: 47; left: 401; width: 91px; height: 30px; ">First Name:</div>
			<div class="labelBox" style="top: 47; left: 792; width: 107px; height: 30px; ">Middle Name:</div>
			<div class="labelBox" style="top: 47; left: 1215; width: 91px; height: 30px; ">Suffix:</div>
			<div class="labelBox" style="top: 101; left: 9; width: 104px; height: 30px; ">Sex:</div>
			<div class="labelBox" style="top: 101; left: 236; width: 104px; height: 30px; ">Date of Birth:</div>
			<div class="labelBox" style="top: 101; left: 600; width: 91px; height: 30px; ">Age:</div>
			<div class="labelBox" style="top: 101; left: 730; width: 128px; height: 30px; ">Student Number:</div>
			<div class="labelBox" style="top: 101; left: 1102; width: 91px; height: 30px; ">Pronoun:</div>
			<!-- for labels end -->


				<div class="formBox" style="top: 36; left: 110; width: 251px;"><!-- last name -->
					<input type="text" id="lName" name="lName">
				</div>
				<div class="formBox" style="top: 36; left: 502; width: 251px;">
					<input type="text" id="fName" name="fName">
				</div><!-- First Name -->
				<div class="formBox" style="top: 36; left: 918; width: 251px;">
					<input type="text" id="mName" name="mName">
				</div><!-- middle name -->
				<div class="formBox" style="top: 36; left: 1278; width: 79px;">
					<input type="text" id="suff" name="suff">
				</div> <!-- suffix -->
				<div class="formBox" style="top: 94; left: 340; width: 249px;">
					<input type="date" id="birthday" name="birthday">
				</div><!-- date of birth -->
				<div class="formBox" style="top: 94; left: 50; width: 100px;">
					<input type="text" id="sex" name="sex">
				</div><!-- Sex -->
				<div class="formBox" style="top: 94; left: 643; width: 52px;">
					<input type="text" id="age" name="age">
				</div><!-- age -->
				<div class="formBox" style="top: 94; left: 863; width: 219px;">
					<input type="text" id="studNum" name="studNum">
				</div><!-- student number -->
				<div class="formBox" style="top: 94; left: 1182; width: 175px;">
					<input type="text" id="proNoun" name="proNoun">
				</div><!-- pronoun -->
		</div> <!-- box 1 send -->

		<div class="box2"> <!-- box 2 start -->
			<div class="sectionBox" style="text-align: center;">Contact Information</div> <!-- section box 1 -->
			<!-- for labels start -->
			<div class="labelBox" style="top: 49; left: 9; width: 134px; height: 30px; ">Contact Number: </div>
			<div class="labelBox" style="top: 49; left: 463; width: 145px; height: 30px; ">Telephone Number:</div>
			<div class="labelBox" style="top: 49; left: 935; width: 124px; height: 30px; ">E-mail Address:</div>
			<div class="labelBox" style="top: 100; left: 9; width: 307px; height: 30px; ">Parent/Guardian in case of Emergency:</div>
			<div class="labelBox" style="top: 100; left: 608; width: 91px; height: 30px; ">Contact No.:</div>
			<div class="labelBox" style="top: 100; left: 988; width: 91px; height: 30px; ">Relationship:</div>
			<div class="labelBox" style="top: 148; left: 9; width: 91px; height: 30px; ">Address:</div>
			<div class="labelBox" style="top: 192; left: 9; width: 91px; height: 30px; ">City/Municipality:</div>
			<div class="labelBox" style="top: 192; left: 424; width: 91px; height: 30px; ">Region:</div>
			<div class="labelBox" style="top: 192; left: 760; width: 91px; height: 30px; ">Country:</div>
			<div class="labelBox" style="top: 192; left: 1177; width: 91px; height: 30px; ">Postal:</div>
			<!-- for labels end -->

				<div class="formBox" style="top: 40; left: 143; width: 304px;">
					<input type="text" id="conNum" name="conNum">
				</div><!-- contact number -->
				<div class="formBox" style="top: 40; left: 616; width: 304px;">
					<input type="text" id="telNum" name="telNum">
				</div><!-- telephone number -->
				<div class="formBox" style="top: 40; left: 1059; width: 298px;">
					<input type="text" id="emailAdd" name="emailAdd">
				</div><!-- email address -->
				<div class="formBox" style="top: 90; left: 304; width: 272px;">
					<input type="text" id="pgName" name="pgName">
				</div><!-- parent/guardian  -->
				<div class="formBox" style="top: 90; left: 718; width: 251px;">
					<input type="text" id="conNumPG" name="conNumPG">
				</div><!-- contact number -->
				<div class="formBox" style="top: 90; left: 1099; width: 258px;">
					<input type="text" id="pgRel" name="pgRel">
				</div><!-- relationship -->
				<div class="formBox" style="top: 139; left: 82; width: 1275px;">
					<input type="text" id="add" name="add">
				</div><!-- address -->
				<div class="formBox" style="top: 182; left: 150; width: 242px;">
					<input type="text" id="city" name="city">
				</div><!-- city/municipality -->
				<div class="formBox" style="top: 182; left: 497; width: 226px;">
					<input type="text" id="region" name="region">
				</div><!-- region -->
				<div class="formBox" style="top: 182; left: 836; width: 309px;">
					<input type="text" id="country" name="country">
				</div><!-- country -->
				<div class="formBox" style="top: 182; left: 1246; width: 111px;">
					<input type="text" id="postal" name="postal">
				</div><!-- postal -->

		</div> <!-- box 2 end -->

		<div class="box3"> <!-- box 3 start -->
			<div class="sectionBox" style="text-align: center;">Prevoius School Information</div> <!-- section box 1 -->
			
			<!-- for labels start -->
			<div class="labelBox" style="top: 54; left: 9; width: 200px; height: 30px; ">Name of School:</div>	
			<div class="labelBox" style="top: 54; left: 943; width: 200px; height: 30px; ">Last Year Attended:</div>
			<div class="labelBox" style="top: 101; left: 9; width: 200px; height: 30px; ">School Address</div>
			<div class="labelBox" style="top: 150; left: 9; width: 200px; height: 30px; ">Language of Instruction</div>
			<div class="labelBox" style="top: 150; left: 465; width: 200px; height: 30px; ">General Weighted Average</div>
			<div class="labelBox" style="top: 150; left: 913; width: 200px; height: 30px; ">Reason for Transfer</div>
			<!-- for labels end -->

				<div class="formBox" style="top: 45; left: 143; width: 790px;">
					<input type="text" id="schoolName" name="schoolName">
				</div>
				<div class="formBox" style="top: 45; left: 1099; width: 258px;">
					<input type="text" id="lastYearAttended" name="lastYearAttended">
				</div>
				<div class="formBox" style="top: 95; left: 143; width: 1214px;">
					<input type="text" id="schoolAddress" name="schoolAddress">
				</div>
				<div class="formBox" style="top: 140; left: 205; width: 247px;">
					<input type="text" id="langOfInstruction" name="langOfInstruction">
				</div>
				<div class="formBox" style="top: 140; left: 683; width: 212px;">
					<input type="text" id="GWA" name="GWA">
				</div>
				<div class="formBox" style="top: 140; left: 1085; width: 272px;">
					<input type="text" id="reasonForTransfer" name="reasonForTransfer">
				</div>
		</div> <!-- box 3 end -->
	</div> <!-- main box end -->
	<div class="formBox" style="top: 870; left: 798; width: 323px; height: 46px; border-radius: 20px;">

			<input type="submit" value="submit">
		<?php
				if(isset($_POST['fName'])){
					$lastName = $_POST['lName'];
					$firstName = $_POST['fName'];
					$middleName = $_POST['mName'];
					$suffix = $_POST['suff'];
					$sex = $_POST['sex'];
					$date = date('m/d/Y');
					$age = $_POST['age'];
					$student_number = $_POST['studNum'];
					$pronoun = $_POST['proNoun'];
				
					#Contact Info
					$contactNo = $_POST['conNum'];
					$telNo = $_POST['telNum'];
					$email = $_POST['emailAdd'];
					$parent_guardian = $_POST['pgName'];
					$parentContact = $_POST['conNumPG'];
					$relationshipWithGuardian = $_POST['pgRel'];
					$address = $_POST['add'];
					$city = $_POST['city'];
					$region = $_POST['region'];
					$country = $_POST['country'];
					$postal = $_POST['postal'];
				
					#Previous School
					$nameOfSchool = $_POST['schoolName'];
					$lastYearAttended = $_POST['lastYearAttended'];
					$schoolAddress = $_POST['schoolAddress'];
					$languageOfInstruction = $_POST['langOfInstruction'];
					$gwa = $_POST['GWA'];
					$reasonForTransfer = $_POST['reasonForTransfer'];

					
					echo $firstName;


				} else {

				}
				function alert($msg) {
					echo "<script type='text/javascript'>alert('$msg');</script>";
				}
		?>

	</div>
</body>	
</form>
</html>