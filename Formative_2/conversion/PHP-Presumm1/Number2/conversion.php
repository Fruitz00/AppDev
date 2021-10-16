<?php 
    $firstNumber;
    $convertedNumber;
    $imperialOrMetric;

?>
<!DOCTYPE html>
<html>
    <link rel = "stylesheet" href = "styles.css">
<body>
<h1> Conversion Chart </h1>
    <iframe id = "inputFrame" src = "calculatorFrame/input.php"
    style = "border: 0px solid black;"
    width = "600px"
    height = "600px"
    >

    </iframe>


<!-- Metric Conversion -->
<table>
    <tr>
       <th colspan= "6"> Metric Conversion</th>
    </tr>   
    
    <tr>
        <td> 1 Centimetre  </td>
        <td> = </td>
        <td> 10 millimetres </td>
        <td> 1cm </td>
        <td> = </td>
        <td> 10mm </td>
    </tr>

    <tr>
        <td> 1 Decimeter  </td>
        <td> = </td>
        <td> 10 centimeters </td>
        <td> 1dm </td>
        <td> = </td>
        <td> 10cm </td>
    </tr>
    <tr>
        <td> 1 meter </td>
        <td> = </td>
        <td> 100 centimeters </td>
        <td> 1m </td>
        <td> = </td>
        <td> 100cm </td>
    </tr>

    <tr>
        <td> 1 Kilometer  </td>
        <td> = </td>
        <td> 1000 meters </td>
        <td> 1km </td>
        <td> = </td>
        <td> 1000m </td>
    </tr>
</table>
<!-- Imperial Conversion --> 
<table>
    <th colspan = "6">Imperial Conversions</th>
    <tr>
        <td> 1 foot </td>
        <td> = </td>
        <td> 12 inches  </td>
        <td> 1ft </td>
        <td> = </td>
        <td> 12 in </td>
    </tr>
    <tr>
        <td> 1 yard  </td>
        <td> = </td>
        <td> 3 feet </td>
        <td> 1 yd </td>
        <td> = </td>
        <td> 3 ft </td>
    </tr>
    <tr>
        <td>1 chain</td>
        <td> = </td>
        <td>22 yards</td>
        <td>1 ch</td>
        <td> = </td>
        <td> 22 yd </td>
    </tr>
    <tr>
        <td>1 furlong</td>
        <td>=</td>
        <td>220 yards (or 10 chains)</td>
        <td>1 fur </td>
        <td> = </td>
        <td>220yd (or 10 ch)</td>
    </tr>
    <tr>
        <td> 1 mile  </td>
        <td> = </td>
        <td> 1760 yards (or 8 furlongs) </td>
        <td> 1 mi </td>
        <td> = </td>
        <td> 1760 yd (or 8 fur) </td>
    </tr>
</table>
<!-- Metric To Imperial -->
<table>
    <th colspan = "6"> Metric -> Imperial Conversions </th>
    <tr>
        <td> 1 millimeter  </td>
        <td> = </td>
        <td> 0.03937 inches </td>
        <td> 1 mm </td>
        <td> = </td>
        <td> 0.03937 in </td>
    </tr>
    <tr>
        <td> 1 centimeter </td>
        <td> = </td>
        <td> 0.39370 inches </td>
        <td> 1cm </td>
        <td> = </td>
        <td> 0.39370 in </td>
    </tr>
    <tr>
        <td> 1 meter  </td>
        <td> = </td>
        <td> 39.37008 inches </td>
        <td> 1 m </td>
        <td> = </td>
        <td> 39.37008 in </td>
    </tr>
    <tr>
        <td> 1 meter  </td>
        <td> = </td>
        <td> 3.28084 feet </td>
        <td> 1 m </td>
        <td> = </td>
        <td> 3.28084 ft </td>
    </tr>
    <tr>
        <td> 1 kilometer  </td>
        <td> = </td>
        <td> 1093.6133 yards </td>
        <td> 1 km </td>
        <td> = </td>
        <td> 1093.6133 yd </td>
    </tr>
    <tr>
        <td> 1 kilometer  </td>
        <td> = </td>
        <td> 0.62137 miles </td>
        <td> 1 km </td>
        <td> = </td>
        <td> 0.62137 mi </td>
    </tr>
</table>
<!-- Imperial To Metric -->
<table>
    <th colspan = "6"> Imperial -> Metric Conversions </th>
    <tr>
        <td> 1 inch  </td>
        <td> = </td>
        <td> 2.54 centimeters </td>
        <td> 1 in </td>
        <td> = </td>
        <td> 2.54 cm </td>
    </tr>
    <tr>
        <td> 1 foot  </td>
        <td> = </td>
        <td> 30.48 centimeters </td>
        <td> 1 ft </td>
        <td> = </td>
        <td> 30.48 cm </td>
    </tr>
    <tr>
        <td> 1 yard  </td>
        <td> = </td>
        <td> 91.44 centimeters </td>
        <td> 1 yd </td>
        <td> = </td>
        <td> 91.44 cm </td>
    </tr>
    <tr>
        <td> 1 yard  </td>
        <td> = </td>
        <td> 0.9144 centimeters </td>
        <td> 1 yd </td>
        <td> = </td>
        <td> 0.9144 cm </td>
    </tr>
    <tr>
        <td> 1 mile  </td>
        <td> = </td>
        <td> 1609.344 meters </td>
        <td> 1 mi </td>
        <td> = </td>
        <td> 1609.344 m </td>
    </tr>
    <tr>
        <td> 1 mile  </td>
        <td> = </td>
        <td> 1.609344 kilometres </td>
        <td> 1 m </td>
        <td> = </td>
        <td> 1.6093 </td>
    </tr>
</table> 

</body>
</html>
