<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "styles.css">
</head>
<body>
<form method = "post">
        <label for ="fname"> Enter Number:  </label>
        <input type = "text" id = "number1" name = "number1"><br>

        <label for = "conversion"> Convert from: </label>
        <select name = "conversion1" id = "convert1" autocomplete = "off">
            <option value = "foot" <?= empty ($_POST) && $_POST['conversion1'] == 'centimeter' ? 'selected' : ' '?>> feet </option>
            <option value = "yard"> yard </option>
            <option value = "mile"> mile </option>
            <option value = "inch"> inch </option>
        </select><br>

    <input id = "" type = "submit" name = "calculate" value = "Calculate">


</form>     


    <?php 
        $num = 0;
        $enteredNumber = 0;
        $feet = 0;
        $yard = 0;
        $mile = 0;
        $inch = 0;

        function fromFeet($num){
            $from = "feet";
            $inches = $num * 12;
            $yard = $num / 3;
            $mile = $num / 5280;
            
            echo '
                <table> 
                    <tr>
                    <th colspan= "6"> Imperial Conversion from feet </th>
                    </tr>      

                    <tr>
                    <td>'.$num.' feet </td>
                    <td> = </td>
                    <td>'.$inches.' inches </td>
                    <td>'.$num.'ft </td>
                    <td> = </td>
                    <td>'.$inches.'in  </td>
                    </tr>
                    
                    <tr>
                    <td>'.$num.' feet </td>
                    <td> = </td>
                    <td>'.$yard.' yards </td>
                    <td>'.$num.'ft </td>
                    <td> = </td>
                    <td>'.$yard.'yd </td>
                    </tr>

                    <tr>
                    <td>'.$num.' feet </td>
                    <td> = </td>
                    <td>'.$mile.' mile/s </td>
                    <td>'.$num.'ft </td>
                    <td> = </td>
                    <td>'.$mile.'mi </td>
                    </tr>


                </table>
            ';

        }

        function fromYard($num){
            $from = "yard";
            $inches = $num * 36;
            $mile = $num / 1760;
            $feet = $num * 3;
            
            echo '
                <table> 
                    <tr>
                    <th colspan= "6"> Imperial Conversion from yard </th>
                    </tr>      

                    <tr>
                    <td>'.$num.' yard </td>
                    <td> = </td>
                    <td>'.$inches.' inches </td>
                    <td>'.$num.'yd </td>
                    <td> = </td>
                    <td>'.$inches.'in  </td>
                    </tr>
                    
                    <tr>
                    <td>'.$num.' yard </td>
                    <td> = </td>
                    <td>'.$feet.' ft </td>
                    <td>'.$num.'yd </td>
                    <td> = </td>
                    <td>'.$feet.'ft  </td>
                    </tr>

                    <tr>
                    <td>'.$num.' yard </td>
                    <td> = </td>
                    <td>'.$mile.' mile/s </td>
                    <td>'.$num.'yd </td>
                    <td> = </td>
                    <td>'.$mile.'mi </td>
                    </tr>


                </table>
            ';
        }

        function fromInch($num){
            $from = "yard";
            $foot = $num * 12;
            $yard = $num / 36;
            $mile = $num / 63360;
            
            echo '
                <table> 
                    <tr>
                    <th colspan= "6"> Imperial Conversion from yard </th>
                    </tr>      

                    <tr>
                    <td>'.$num.' inch </td>
                    <td> = </td>
                    <td>'.$yard.' yard/s </td>
                    <td>'.$num.'in </td>
                    <td> = </td>
                    <td>'.$yard.'yd  </td>
                    </tr>
                    
                    <tr>
                    <td>'.$num.' inch </td>
                    <td> = </td>
                    <td>'.$feet.' feet </td>
                    <td>'.$num.'in </td>
                    <td> = </td>
                    <td>'.$yard.'ft  </td>
                    </tr>

                    <tr>
                    <td>'.$num.' inch </td>
                    <td> = </td>
                    <td>'.$mile.' mile/s </td>
                    <td>'.$num.'yd </td>
                    <td> = </td>
                    <td>'.$miles.'mi  </td>
                    </tr>


                </table>
                ';
        }

        function fromMile($num){
            $from = "mile";
            $inch = $num * 63360;
            $foot = $num * 5280;
            $yard = $num * 160;
            
            echo '
                <table> 
                    <tr>
                    <th colspan= "6"> Imperial Conversion from mile </th>
                    </tr>      

                    <tr>
                    <td>'.$num.' mile </td>
                    <td> = </td>
                    <td>'.$inches.' inch/es </td>
                    <td>'.$num.'in </td>
                    <td> = </td>
                    <td>'.$inches.'in  </td>
                    </tr>

                    <tr>
                    <td>'.$num.' mile </td>
                    <td> = </td>
                    <td>'.$feet.' feet </td>
                    <td>'.$num.'in </td>
                    <td> = </td>
                    <td>'.$feet.'ft  </td>
                    </tr>
                    
                    <tr>
                    <td>'.$num.' mile </td>
                    <td> = </td>
                    <td>'.$yard.' yard </td>
                    <td>'.$num.'in </td>
                    <td> = </td>
                    <td>'.$inches.'in  </td>
                    </tr>


                </table>
                ';
        }

        if(isset($_POST['conversion1'])){
            $selected1 = $_POST['conversion1'];

            $enteredNumber = $_POST['number1'];
            switch($selected1){
                case "foot":
                    fromFeet($enteredNumber);
                break;
                case "yard":
                    fromYard($enteredNumber);
                break;
                case "mile":
                    fromMile($enteredNumber);
                break;
                case "yard":
                    fromYard($enteredNumber);
                break;
            }
        } 
    ?>
    <form action = "input.php">
    <input id = "" type = "submit" name = "calculate" value = "Back">
    </form>

</body>


</html>