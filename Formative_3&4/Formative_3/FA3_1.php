<?php
    $headerArr = array("No.","Name","Image","Element","Birthday","Weapon Class");
    $dataArr = array(
        array("1","Amber","Photos/Amber.jpg","Pyro","August 10","Bow"),
        array("2","Kaeya","Photos/Kaeya.jpg","Cryo","November 30","Sword"),
        array("3","Lisa","Photos/Lisa.jpg","Electro","June 9","Catalyst"),
        array("4","Barbara","Photos/Barbara.jpg","Hydro","July 5","Catalyst"),
        array("5","Razor","Photos/Razor.jpg","Electro","September 9","Claymore"),
        array("6","Bennett","Photos/Bennett.jpg","Pyro","February 29","Sword"),
        array("7","Noelle","Photos/Noelle.jpg","Geo","March 21","Claymore"),
        array("8","Fischl","Photos/Fischl.jpg","Electro","May 27","Bow"),
        array("9","Sucrose","Photos/Sucrose.jpg","Anemo","November 26","Catalyst"),
        array("10","Rosaria","Photos/Rosaria.jpg","Cryo","January 24","Spear"),
        array("11","Diona","Photos/Diona.jpg","Cryo","January 18","Bow"),
        array("12","Xiangling","Photos/Xiangling.jpg","Pyro","November 2","Spear"),
        array("13","Beidou","Photos/Beidou.jpg","Electro","February 14","Claymore")
    );

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="1style.css" />
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

    <title>FA3 1</title>
</head>

<body>
    <div class= "box">
        <div class="header"><h2>Formative 3 - 1</h2></div>
        <p align = "center">Will Display the Information of a 4 Star Character in Genshin Impact</p>
        
        <hr>

        <div class = "innerbox">
            <table style="width:100%">
                <tr>
                    <?php 
                        for($i = 0; $i < 6; $i++){
                            echo "<th>$headerArr[$i]</th>";
                            }
                        ?>
                </tr>
                    <?php
                        for($i = 0; $i < 13; $i++){
                            echo "<tr>";
                            echo "<td>".$dataArr[$i][0]."</td>";
                            echo "<td>".$dataArr[$i][1]."</td>";
                            echo "<td><img src = ".$dataArr[$i][2]."></td>";
                            echo "<td>".$dataArr[$i][3]."</td>";
                            echo "<td>".$dataArr[$i][4]."</td>";
                            echo "<td>".$dataArr[$i][5]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </table>

            <div class = "button">
					<button type = "button" class = "back"> <a href = "../index.php"> Back to Index page  </a></button>
			</div>
        </div>
    </div> 
</body>
</html>