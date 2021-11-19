<?php

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if(isset($_POST['submit'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $confirmPass = $_POST['cpass'];

        alert($fName);
        print("NOOOOOOOOOOOOO");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login-style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body style="font-family: 'Oswald', sans-serif;">
    <div class="sidenav">
        <div class="login-main-text">
            <div>LOGO</div>
           <h2>Accounts <br> Registration</h2>
           <br><br><br>
           <h5>Already Have an Account?<br>
                <a href="Log_In.html">Click Here!</a>
           </h5>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
              <form action= "" method="post">
                 <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name ="fName" class="form-control" required="">
                 </div>
                 <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name = "lName" class="form-control" required="">
                 </div>
                 <div class="form-group">
                    <label>Address</label>
                    <input type="text" name = "address" class="form-control" required="">
                 </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" name ="email" class="form-control" required="">
                 </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name = "pass" class="form-control" required="">
                 </div>
                 <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name = "cpass" class="form-control" required="">
               </div>
                 <button type="submit" value = "Aeugh" class="btn btn-black">Register</button>
              </form>
               <?php 
                  if(isset($_POST['submit'])){
                     echo ($fName);
                     echo ("YOU ARE A FAG");
                     alert("Hi there");
                  }
                  echo("No!");
               
               ?>
           </div>
        </div>
     </div>



</body>
</html>