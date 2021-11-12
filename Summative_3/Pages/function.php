<?php
    session_start();
    require_once 'db_con.php';

    function set_message($msg)
    {
        if(!empty($msg))
        {
            $_SESSION['MSG']=$msg;
        }
        else
            {
                $msg="";
            }
    }
    
    
        function display_message()
        {
            if(isset($_SESSION['MSG']))
            {
                echo $_SESSION['MSG'];
                unset($_SESSION['MSG']);
            }
    
        }

    function user_login(){

        if(isset($_SERVER['REQUEST_METHOD'])=='POST' && isset($_POST['login'])){

            global $conn;
            $username = mysqli_real_escape_string($conn,$_POST['userName']);
            $password = mysqli_real_escape_string($conn,$_POST['pass']);

            #session

            $query = "SELECT * FROM accounts WHERE user_name = '$username'";
            $_result = mysqli_query($conn,$query);

                if(mysqli_num_rows($_result)){

                    while($row = mysqli_fetch_assoc($_result)){

                        $username_db = $row['user_name'];
                        $password_db = $row['password'];
                        if($password == $password_db){
                            $_SESSION['USERNAME'] = $username_db;
                            $_SESSION['PASSWORD'] = $password_db;
                            header('location: dashboard_A.php');
                        } else {
                            $error = '<div class = "alert alert-danger"> Incorrect Password </div>';
                            set_message($error);
                        }

                    }
                    
                } else {
                    $error = '<div class = "alert alert-danger"> Invalid Username </div>';
                    set_message($error);
                }
        }    
    
    }



?>