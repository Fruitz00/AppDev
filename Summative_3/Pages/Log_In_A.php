<?php
    include 'header.php';
    include 'function.php';
    user_login();

    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        header("location:dashboard.php");
    }
    
?>

<body>
    <div class="regBox">
        <br><br>
        <h2 align = "center">My Personal Information</h2>
        <br><br>
        <h3 align = "center">Log In</h3>
        <br>
        <form method = "post">
            <?php if(isset($_SESSION['MSG'])){
                display_message();  
            }
                
            ?>
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

            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-block" name = "login" value = "Login"></button>

            <!-- Remember me button -->
            <label> <input type="checkbox" name="remember" class ="mb-3">Remember Me</label>
		    
        </form>
    </div>
            
</body>