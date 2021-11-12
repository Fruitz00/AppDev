<?php 

    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = $login_err = "";
     
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
            $password = trim($_POST["password"]);        
            
            //set cookies if Remember me is checked
            if (isset($_POST['RememberMe'])){
                    setcookie("user_name", $username, time()+ 60); 
                    setcookie("pass_word", $password, time()+ 60); 
                }

            header("location: dashboard_A.php");
            exit;
        } 
    }
include 'header.php';
?>

<body>
    <div class="regBox">
        <br><br>

        <?php
            if (isset($_COOKIE['user_name']) && (isset($_COOKIE['pass_word']))){
                $cookieUname = $_COOKIE["user_name"];
                $cookiePass = $_COOKIE["pass_word"];
            }
        ?>
    
        
        <?php 
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php if (isset($_COOKIE['user_name'])) echo $cookieUname; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <br>
            </div>    

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"value="<?php if (isset($_COOKIE['pass_word'])) echo $cookiePass; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <br>
            </div>

            <div>
                <input type="checkbox" name="RememberMe" value="forever" checked="checked"/>
                <label>Remember Me</label>
                <br><br>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>