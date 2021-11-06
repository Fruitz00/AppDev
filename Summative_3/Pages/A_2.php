<?php

    include 'header.php';
?>

<body>
    <div class="regBox">
        <br><br>
        <form method = "post" >
            <!-- Username -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form1Example1">Username</label>
            <input type="text" name ="userName" class="form-control" required = "" value = "<?php if (isset($_COOKIE['namecookie'])) echo $_POST['userName'];?>">           
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form1Example1">Password</label>
            <input type="password" name ="pass" class="form-control" required = "" value ="<?php if (isset($_COOKIE['passcookie'])) {echo $_POST['pass'];}?>">
            </div>

            <!-- Remember Me checkbox -->
            <input type="checkbox" name = "RememberMe"> Remember Me</button> 
            
            <br><br>

            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-block" name = "submit" value = "Submit"></button>

        </form>

            <?php 
                if(isset($_POST['submit'])){
                    $userName = $_POST['userName'];
                    $pass = $_POST['pass'];

                    if(!empty($_POST['RememberMe'])){
                        setcookie("namecookie", $userName, time()+10);
                        setcookie("passcookie", $pass, time()+10);

                        echo "cookies set";

                    }
                    else{
                        setcookie("namecookie", "");
                        setcookie("passcookie", "");
                    }
                }
            ?>
    </div>

</body>
</html>