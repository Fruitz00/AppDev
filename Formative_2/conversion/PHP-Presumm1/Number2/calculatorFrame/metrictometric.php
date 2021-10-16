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
            <option value = "centimeter" <?= empty ($_POST) && $_POST['conversion1'] == 'centimeter' ? 'selected' : ' '?>> centimeter </option>
            <option value = "decimeter"> decimeter </option>
            <option value = "meter"> meter </option>
            <option value = "kilometer"> kilometer </option>
        </select><br>

    <input id = "" type = "submit" name = "calculate" value = "Calculate">


</form>     


    <?php 
        $num = 0;
        $enteredNumber = 0;
        $centimeters = 0;
        $decimeters = 0;
        $meters = 0;
        $kilometers = 0;
        $millimeters = 0;

        function fromCentimeter($num){
            $from = "centimeter";
            $millimeters = $num * 10;
            $decimeters = $num / 10;    
            $meters = $num / 100;
            $kilometers = $num / 100000;
            
            echo '
                <table> 
                    <tr>
                    <th colspan= "6"> Metric Conversion from centimeter </th>
                    </tr>      

                    <tr>
                    <td>'.$num.' centimeter/s </td>
                    <td> = </td>
                    <td>'.$millimeters.' millimeters </td>
                    <td>'.$num.'cm </td>
                    <td> = </td>
                    <td>'.$millimeters.'mm </td>
                    </tr>
                    
                    <td>'.$num.' centimeter/s </td>
                    <td> = </td>
                    <td>'.$num.' decimeters </td>
                    <td>'.$num.'cm </td>
                    <td> = </td>
                    <td>'.$decimeters.'dm </td>
                    </tr>

                    <td>'.$num.' centimeter/s  </td>
                    <td> = </td>
                    <td>'.$meters.' meters </td>
                    <td>'.$num.'cm </td>
                    <td> = </td>
                    <td>'.$meters.'m </td>
                    </tr>

                    <td>'.$num.' centimeter/s </td>
                    <td> = </td>
                    <td>'.$kilometers.' kilometers </td>
                    <td>'.$num.'cm </td>
                    <td> = </td>
                    <td>'.$kilometers.'km </td>
                    </tr>

                </table>
            ';

        }

        function fromDecimeter($num){
            $from = "decimeter";
            $millimeters = $num * 100;
            $centimeters = $num * 10;
            $meters = $num / 10;
            $kilometers = $num / 10000;

            echo '
            <table> 
                <tr>
                <th colspan= "6"> Metric Conversion from decimeters </th>
                </tr>      

                <tr>
                <td>'.$num.' decimeter/s </td>
                <td> = </td>
                <td>'.$millimeters.' millimeters </td>
                <td>'.$num.'dm </td>
                <td> = </td>
                <td>'.$millimeters.'mm </td>
                </tr>

                <tr>
                <td>'.$num.' decimeter/s </td>
                <td> = </td>
                <td>'.$centimeters.' centimeter/s </td>
                <td>'.$num.'cm </td>
                <td> = </td>
                <td>'.$centimeters.'cm </td>

                </tr>
                <tr>
                <td>'.$num.' decimeter/s </td>
                <td> = </td>
                <td>'.$meters.' meters </td>
                <td>'.$num.'dm </td>
                <td> = </td>
                <td>'.$meters.'m </td>
                </tr>

                <tr>
                <td>'.$num.' decimeter/s </td>
                <td> = </td>
                <td>'.$kilometers.' kilometers </td>
                <td>'.$num.'dm </td>
                <td> = </td>
                <td>'.$kilometers.'km </td>
                </tr>
                
            </table>
        ';
        }

        function fromMeter($num){
            $from = "meter";
            $millimeters = $num * 1000;
            $centimeters = $num * 100;
            $decimeters = $num * 10;
            $kilometers = $num / 1000;

            echo '
            <table> 
                <tr>
                <th colspan= "6"> Metric Conversion from meters </th>
                </tr>      

                <tr>
                <td>'.$num.' meter/s </td>
                <td> = </td>
                <td>'.$millimeters.' millimeters </td>
                <td>'.$num.'m </td>
                <td> = </td>
                <td>'.$millimeters.'mm </td>
                </tr>

                <tr>
                <td>'.$num.' meter/s </td>
                <td> = </td>
                <td>'.$decimeters.' decimeters </td>
                <td>'.$num.'m </td>
                <td> = </td>
                <td>'.$decimeters.'dm </td>
                </tr>

                <tr>
                <td>'.$num.' meter/s </td>
                <td> = </td>
                <td>'.$centimeters.' centimeters </td>
                <td>'.$num.'m </td>
                <td> = </td>
                <td>'.$centimeters.'cm </td>
                </tr>

                <tr>
                <td>'.$num.' meter/s </td>
                <td> = </td>
                <td>'.$kilometers.' kilometers </td>
                <td>'.$num.'m </td>
                <td> = </td>
                <td>'.$kilometers.'km </td>
                </tr>
                
            </table>
        ';

        }

        function fromKilometer($num){
            $from = "kilometer";
            $millimeters = $num * 1e+6;
            $centimeters = $num * 100000;
            $decimeters = $num * 10000;
            $meters = $num * 1000;

            echo '
            <table> 
                <tr>
                <th colspan= "6"> Metric Conversion from kilometers </th>
                </tr>      

                <tr>
                <td>'.$num.' kilometer/s </td>
                <td> = </td>
                <td>'.$millimeters.' millimeters </td>
                <td>'.$num.'km </td>
                <td> = </td>
                <td>'.$millimeters.'mm </td>
                </tr>

                <tr>
                <td>'.$num.' kilometer/s </td>
                <td> = </td>
                <td>'.$decimeters.' decimeters </td>
                <td>'.$num.'km </td>
                <td> = </td>
                <td>'.$decimeters.'dm </td>
                </tr>

                <tr>
                <td>'.$num.' kilometer/s </td>
                <td> = </td>
                <td>'.$centimeters.' centimeters </td>
                <td>'.$num.'km </td>
                <td> = </td>
                <td>'.$centimeters.'cm </td>
                </tr>

                <tr>
                <td>'.$num.' kilometer/s </td>
                <td> = </td>
                <td>'.$meters.' meters </td>
                <td>'.$num.'km </td>
                <td> = </td>
                <td>'.$meters.'m </td>
                </tr>
                
            </table>
        ';
        }


        if(isset($_POST['conversion1'])){
            $selected1 = $_POST['conversion1'];

            $enteredNumber = $_POST['number1'];
            switch($selected1){
                case "centimeter":
                    fromCentimeter($enteredNumber);
                break;
                case "decimeter":
                    fromDecimeter($enteredNumber);
                break;
                case "meter":
                    fromMeter($enteredNumber);
                break;
                case "kilometer":
                    fromKilometer($enteredNumber);
                break;
            }
        } 
    ?>

    <form action = "input.php">
    <input id = "" type = "submit" name = "calculate" value = "Back">
    </form>


</body>


</html>