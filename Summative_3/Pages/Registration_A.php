<?php
    if(isset($_POST['submit'])){
        $fName = $_POST['fName'];
        $mName = $_POST['mName'];
        $lName = $_POST['lName'];
        $userName = $_POST['userName'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];
        $bday = $_POST['bday'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactNumber'];
         
        if ($password == $cpassword){
            include 'db_con.php';

            $sql = "INSERT INTO accounts(`First_Name`,`Middle_Name`,`Last_Name`,`user_name`,`password`,`birthday`,`email`,`contact_number`)
                        VALUES('$fName','$mName','$lName','$userName','$password','$bday','$email','$contactNumber')";
            
            $result = mysqli_query($conn, $sql);
            if($result){
                // echo "Submitted Successfully";
            }else{
                // echo "Error Occured";
            }
        }else{
            //error 
        }
    }

    include 'header.php';
?>

<body>
    <div class="regBox">
        <br><br>
        <h2 align = "center">My Personal Information</h2>
        <br>
        <form method = "post">
            <!-- First Name -->
            <div class="form-outline mb-4">
            <input type="text" name ="fName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">First Name</label>
            </div>

            <!-- Middle Name -->
            <div class="form-outline mb-4">
            <input type="text" name ="mName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Middle Name</label>
            </div>

            <!-- Last Name -->
            <div class="form-outline mb-4">
            <input type="text" name ="lName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Last Name</label>
            </div>

            <!-- User Name -->
            <div class="form-outline mb-4">
            <input type="text" name ="userName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">User Name</label>
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
            <input type="password" name ="pass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Password</label>
            </div>

            <!-- Confirm Password -->
            <div class="form-outline mb-4">
            <input type="password" name ="cpass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Confirm Password</label>
            </div>

            <!-- Birthday -->
            <div class="form-outline mb-4">
            <input type="date" name ="bday" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Birthday</label>
            </div>

            <!-- Email -->
            <div class="form-outline mb-4">
            <input type="text" name ="email" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Email</label>
            </div>
        
            <!-- Contact Number -->
            <div class="form-outline mb-4">
            <input type="text" name ="contactNumber" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Contact Number</label>
            </div>
        
            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-block" name = "submit" value = "Submit"></button>

            <!-- Show button -->
            <button type = "button" class = "btn btn-primary btn-block" style = "margin-left: 251px"><a href = "A_2.php">Login</a> </button>
        </form>
    </div>

<?php 

    
        if(isset($_POST['submit'])){
            $password = $_POST['pass'];
            $cpassword = $_POST['cpass'];
            if ($password == $cpassword){
                echo("<div class = 'regbox' align = 'center' border-width: 2px>");
                print("Your Entered Values are:"."\n"); echo '<br>';
                echo("Full Name: $lName".", ".$fName." ".$mName."<br>");
                echo("Username: $userName <br>");
                echo("Password: $password <br>");
                echo("Birthday: $bday <br>");
                echo("E-mail: $email<br>");
                echo("Contact Number: $contactNumber");    
                echo("</div>")  ;
            } else {
                 echo("<div class = 'regbox' align = 'center' border-width: 2px>");
                 echo "password do not match";
            }
        }

?>


</body>
</html>