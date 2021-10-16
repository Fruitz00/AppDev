<?php
    $month = array("January","March","April","October");
    $weekSm = array("S","M","T","W","TH","F","ST");
    $week = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    $day = array(
    array(1,2,3,4,5,6,7),
    array(8,9,10,11,12,13,14),
    array(15,16,17,18,19,20,21),
    array(22,23,24,25,26,27,28),
    array(29,30,31,null,null,null,null));
    $bday = array(29,1,23,28);
?>

<!DOCTYPE html>

<html lang = 'en' xmlns = "http://www.w3.org/1999/xthml">
<head>

    <!-- STYLE SHEET -->
	<link rel="stylesheet" href="style1.css" />
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <title>TA1 Index</title>
</head>

	<body>
		<div class = "box">
			<div class = "header">
				<h1>SA1 - 1</h1>
                <p>Shows the Birthday of each Member of Group Fatui</p>
                <p>Order by: Ella - > Dmitri - > Junelle - > Kyle</p> 

		
			</div> <!-- eof header -->

			<hr>

            <div class="innerbox">
                <table>
                    <tr>
                        <th colspan="7"><?php echo $month[0]?></th>
                    </tr>
                    <tr>
                        <?php
                            for($i = 0; $i < 7; $i++){
                                echo "<th>$week[$i]</th>";
                            }
                        ?>
                    </tr>
                    <?php
                        for($i = 0; $i < 5; $i++){
                        echo "<tr>";
                            for($j = 0; $j < 7; $j++){
                                if($day[$i][$j] == $bday[0]){
                                    echo "<td style = \"background-color: #FEC260; color: #2A0944\">".$day[$i][$j]."</td>";
                                }else{
                                    echo "<td>".$day[$i][$j]."</td>";
                                }   
                            }
                        echo "</tr>"; 
                        }       
                    ?>
                </table>

                <br>
                
                <table>
                    <tr>
                        <th colspan="7"><?php echo $month[1]?></th>
                    </tr>
                    <tr>
                        <?php
                            for($i = 0; $i < 7; $i++){
                                echo "<th>$week[$i]</th>";
                            }
                        ?>
                    </tr>
                    <?php
                        for($i = 0; $i < 5; $i++){
                        echo "<tr>";
                            for($j = 0; $j < 7; $j++){
                                if($day[$i][$j] == $bday[1]){
                                    echo "<td style = \"background-color: #FEC260; color: #2A0944\">".$day[$i][$j]."</t>";
                                }else{
                                    echo "<td>".$day[$i][$j]."</td>";
                                }   
                            }
                        echo "</tr>"; 
                        }       
                    ?>
                </table>

                <br>

                <table>
                    <tr>
                        <th colspan="7"><?php echo $month[2]?></th>
                    </tr>
                    <tr>
                        <?php
                            for($i = 0; $i < 7; $i++){
                                echo "<th>$week[$i]</th>";
                            }
                        ?>
                    </tr>
                    <?php
                        for($i = 0; $i < 5; $i++){
                        echo "<tr>";
                            for($j = 0; $j < 7; $j++){
                                if($day[$i][$j] == $bday[2]){
                                    echo "<td style = \"background-color: #FEC260; color: #2A0944\">".$day[$i][$j]."</t>";
                                }else{
                                    echo "<td>".$day[$i][$j]."</td>";
                                }   
                            }
                        echo "</tr>"; 
                        }       
                    ?>
                </table>

                <br>

                <table>
                    <tr>
                        <th colspan="7"><?php echo $month[3]?></th>
                    </tr>
                    <tr>
                        <?php
                            for($i = 0; $i < 7; $i++){
                                echo "<th>$week[$i]</th>";
                            }
                        ?>
                    </tr>
                    <?php
                        for($i = 0; $i < 5; $i++){
                        echo "<tr>";
                            for($j = 0; $j < 7; $j++){
                                if($day[$i][$j] == $bday[3]){
                                    echo "<td style = \"background-color: #FEC260; color: #2A0944\">".$day[$i][$j]."</t>";
                                }else{
                                    echo "<td>".$day[$i][$j]."</td>";
                                }   
                            }
                        echo "</tr>"; 
                        }       
                    ?>
                </table>
                
                <button type = "button" class = "btn"> <a href = "../index.php">Back to Index</a> </button>
            </div>
		</div> <!-- eof box -->
	</body>
</html>

