<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "FA5-3STYLES.css">
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
</head>
<form method = "post" action = "outputPage.php">  
<?php
    if (isset($_POST['color1'])){
        $_SESSION['col1'] = $_POST['color1'];
        $_SESSION['col2'] = $_POST['color2'];
        $_SESSION['col3'] = $_POST['color3'];
        $_SESSION['col4'] = $_POST['color4'];
        $_SESSION['col5'] = $_POST['color5'];

       
    }
?>
    <table>
    <tr>
       <th colspan = "6"> Enter Your Favorite Colors </th>
    </tr>

    <tr> <!--- Row 1 --->
        <td> Favorite Color 1 </td>
        <td> <input type = "text" id = "color1" name = "color1">
    </tr>
    <tr> <!--- Row 2 --->
        <td> Favorite Color 2 </td>
        <td> <input type = "text" id = "color2" name = "color2">
    </tr>
    <tr> <!--- Row 3 --->
        <td> Favorite Color 3 </td>
        <td> <input type = "text" id = "color3" name = "color3">
    </tr>
    <tr> <!--- Row 4 --->
        <td> Favorite Color 4 </td>
        <td> <input type = "text" id = "color4" name = "color4">
    </tr>
    <tr> <!--- Row 5 --->
        <td> Favorite Color 5 </td>
        <td> <input type = "text" id = "color5" name = "color5">
    </tr>
    <tr>
        <td colspan = "2"> <input type = "submit" name = "submit" value = "Submit"/> 
    </tr>
    </table>
</form>
        <form action = "../index.php">
            <td colspan = "1"> <input type = "submit" name = "index" value = "Back to index"/> 
        </form>

</html>