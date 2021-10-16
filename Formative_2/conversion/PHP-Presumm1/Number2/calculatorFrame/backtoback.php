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
            <option value = "millimeter"> millimeter </option>
            <option value = "centimeter"> centimeter </option>
            <option value = "meter"> meter </option>
            <option value = "kilometer"> kilometer </option>
        </select><br>

        <label for = conversion2> To: </label>
        <select name = "conversion2" id = "convert2" autocomplete = "off">
            <option value = "inch" <?= empty ($_POST) && $_POST['conversion1'] == 'centimeter' ? 'selected' : ' '?>> inch </option>
            <option value = "yard"> yard </option>
            <option value = "feet"> feet </option>
            <option value = "miles"> miles </option>
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

        function mil_to_in($num){
            $mmtoin = $millimeters/25.4;
            echo 'Answer is: '.$mmtoin;
        }

        function cm_to_yd($num){
            $cm_to_yd = $centimeters/91.44;
            echo 'Answer is: '.$mmtoin;
        }

        function m_to_mi($num){
            $m_to_miles = $meters/1609;
            echo 'Answer is: '.$m_to_miles;
        }

        function km_to_mile($num){
            $kmtomi = $num/1.609;
            echo 'Answer is: '.$kmtomi;
        }

        function in_to_mm($num){
            $intomm = $num * 25.4;
            echo 'Answer is: '.$intomm;
        }

        function yd_to_cm($num){
            $ydtocm = $num * 91.44;
            echo 'Answer is: '.$ydtocm;
        }

        function mi_to_m($num){
            $mitomm = $num * 1609.34;
            echo 'Answer is: '.$mitomm;
            
        }

        function mile_to_km($num){
            $miletokm = $num * 1.609;
            echo 'Answer is: '.$miletokm;
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