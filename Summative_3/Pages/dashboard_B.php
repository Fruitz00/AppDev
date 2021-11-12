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
        <h2>User Information Form</h2>
        <br>
        <h4>Welcome:</h4>
        <h4>Birthday:</h4>
        <h4>Contact Details:</h4>
        <h4>Email:</h4>
        <h4>Contact No.:</h4>
        <br>
        <h4>Reset Password:</h4>
        <div class="form-outline mb-4">

        <form method = "post" >
            <input type="text" name ="userName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Enter Current Password</label>
            </div>

            <input type="text" name ="userName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Enter New Password</label>
            </div>

            <input type="text" name ="userName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Re-Enter New Password</label>
            </div>

            <!-- Submit button -->
            <br>
            <a href = "logout.php" class="btn btn-primary btn-block">Logout</a>
        </form>
    </div>
</body>