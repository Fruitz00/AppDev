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
        <h2 align = "center">WELCOME</h2>
        <br>
        <form method = "post" >
            <?php if(isset($_SESSION['MSG'])){
                display_message();  
            }
                
            ?>

            <!-- Submit button -->
            <a href = "logout.php" class="btn btn-primary btn-block">Logout</a>

        </form>
    </div>
    

</body>