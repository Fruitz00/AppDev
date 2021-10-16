<!DOCTYPE html>
<html>
<style>

body{
    font-family: comfortaa;
    text-align: center;
    background: #C4C4C4;
}
 
</style>
<body>
<div class="box1" style="top: 90; left: 689;"></div> 
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
        } else {
            echo 'null';
            $fName = $_POST['fName'];
        }
    ?>
    <h1> You have Entered </h1>

        <?php 
            echo 
            '
                <h1> Student Information </h1>
                First Name: '.$firstName.'<br>
                Last Name: '.$lastName.'<br>
                Middle Name: '.$middleName.'<br>
                Suffix: : '.$suffix.'<br>
                Sex: '.$sex.'<br>
                Date: '.$date.'<br>
                Age: '.$age.'<br>
                Student number: '.$student_number.'<br>
                Pronoun: '.$pronoun.'<br><br>

                <h2> Guardian Information </h2>
                Contact Number: '.$contactNo.'<br>
                Telephone Number: '.$telNo.'<br>
                Email: '.$email.'<br>
                Parent / Guardian: '.$parent_guardian.'<br>
                Guardian Contact: '.$parentContact.'<br>
                Guardian Relationship: '.$relationshipWithGuardian.'<br>
                Address: '.$address.'<br>
                City: '.$city.'<br>
                Region: '.$region.'<br>
                Country: '.$country.'<br>
                Postal: '.$postal.'<br>

                <h3> Previous School </h3>
                Name of School: '.$nameOfSchool.'<br>
                Last Year Attended: '.$lastYearAttended.'<br>
                School Address: '.$schoolAddress.'<br>
                Language of Instruction: '.$languageOfInstruction.'<br>
                GWA: '.$gwa.'<br>
                Reason For Transfer: '.$reasonForTransfer.'<br>

                
            
            ';
        ?>


</body>
</html>