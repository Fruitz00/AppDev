<!DOCTYPE html>
<html>
<head>
	<title> Factorial </title>
</head>
<body>
	<?php
        $val = 10;
        $factorial = 1;

        
        for ($x = $val; $x > 0; $x--){
            $factorial *= $x;
        }

        echo " !$val = ";
        for ($x = $val; $x > 0; $x--){
            echo "($x) ";
        }
        echo " = $factorial";
        

    ?>
</body>
</html>