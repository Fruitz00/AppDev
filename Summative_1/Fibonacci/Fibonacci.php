<!DOCTYPE html>
<html>
<head>
	<title> Fibonacci </title>
</head>
<body>
	<?php
        $val = 30;
        $x = 0;
        $y = 1;
        $z;

        for ($i = 0; $i < $val; $i++){
            $z = $x + $y;
            $y = $x;
            $x = $z;
            echo "$z , ";
            
        }

    ?>
</body>
</html>