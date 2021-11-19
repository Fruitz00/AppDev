
<?php
    session_start();
    include 'db_con.php';
    include 'header.php';

    if(isset($_POST['resetPass'])){
        $newPass = $_POST['newPass'];
        $reNewPass = $_POST['reNewPass'];
        $currentPass = $_POST['currentPass'];
        $username = $_SESSION['USERNAME'];
        $pass = $_SESSION['PASSWORD'];


        if($pass == $currentPass){
            if($reNewPass == $newPass){
                
                $sql = "UPDATE accounts 
                SET `password` = '$newPass' 
                WHERE `user_name` = '$username' 
                AND `password` = '$pass'";
                $result = mysqli_query($conn, $sql);

                echo "<br>Password reset was successful";
                
            }else{
                echo "password Confirmation error";
            }
        }else{
            echo "Wrong Current Password";
        }
    }

?>