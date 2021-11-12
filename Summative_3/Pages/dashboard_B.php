<?php 
include 'header.php';
session_start();

if(!isset($_SESSION['USERNAME']) && isset($_SESSION['PASSWORD']))
{
    header("location:A_2.php");
}?>
<body>
    <div class="regBox">
        <br><br>
        <h2 align = "center">User Information Form</h2>
        <br>
        <h4 align = "center">Welcome:</h4>
            <h6 align = "center">Hello</h6>
        <h4 align = "center">Birthday:</h4>
            <h6 align = "center">Hello</h6>
        <h4 align = "center">Contact Details:</h4>
            <h6 align = "center">Hello</h6>
        <h4 align = "center">Email:</h4>
            <h6 align = "center">Hello</h6>
        <h4 align = "center">Contact No.:</h4>
            <h6 align = "center">Hello</h6>
        <br>
        <h4>Reset Password:</h4>
        <form action="post">
            <div class="form-outline mb-4">
            <input type="text" name ="currentPass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Enter Current Password</label>
            </div>

            <div class="form-outline mb-4">
            <input type="text" name ="newPass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Enter New Password</label>
            </div>

            <div class="form-outline mb-4">
            <input type="text" name ="reNewPass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Re-Enter New Password</label>
            </div>
            
            <br>
                <a href = "logout.php" class="btn btn-primary btn-block">Reset Password</a>
        </form>

            <!-- Submit button -->
               
    </div>
</body>