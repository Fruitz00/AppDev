<?php 
include 'header.php';
include 'db_con.php';
session_start();


    if(!isset($_SESSION['USERNAME']) && isset($_SESSION['PASSWORD']))
    {
        header("location:A_2.php");
    }
    
    if(isset($_POST['login'])){
        $username = $_SESSION['USERNAME'];
        $password = $_SESSION['PASSWORD'];
        
        $fname = "";
        $mname = "";
        $lname = "";
        $birthday = "";
        $contact = 0;
        $email = "";

        $sql = "SELECT * FROM accounts WHERE `user_name` = '$username' AND `password` = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        
        if($row){
            if($row['user_name'] == $username ){
                $fname = $row['First_Name'];
                $mname = $row['Middle_Name'];
                $lname = $row['Last_Name'];
                $email = $row['email'];
                $contact = $row['contact_number'];
            }       
        }
    }

?>

    
<body>
    <div class="regBox">
        <br><br>
        <h2 align = "center">User Information Form</h2>
        <br>
        <h4 align = "center">Welcome:</h4>
            <h6 align = "center"><?php echo $fname." ".$mname." ".$lname?></h6>
        <h4 align = "center">Birthday:</h4>
            <h6 align = "center"><?php echo $row['birthday']?></h6><br>
        <h4 align = "center">Contact Details:</h4>
        <h4 align = "center">Email:</h4>
            <h6 align = "center"><?php echo $email?></h6>
        <h4 align = "center">Contact No.:</h4>
            <h6 align = "center"><?php echo $contact?></h6>
        <br>
        <h4>Reset Password:</h4>
        <form action = "reset_pass.php" method="post">
            <div class="form-outline mb-4">
            <input type="password" name ="currentPass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Enter Current Password</label>
            </div>

            <div class="form-outline mb-4">
            <input type="password" name ="newPass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Enter New Password</label>
            </div>

            <div class="form-outline mb-4">
            <input type="password" name ="reNewPass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Re-Enter New Password</label>
            </div>
            
            <!-- submit -->
            
            <br>
            <input type="submit" class="btn btn-primary btn-block" name = "resetPass" value = "Reset Password"></button>

        </form>
    </div>
</body>