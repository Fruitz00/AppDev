<?php
    session_start();
    $_SESSION['col1'] = $_POST['color1'];
    $_SESSION['col2'] = $_POST['color2'];
    $_SESSION['col3'] = $_POST['color3'];
    $_SESSION['col4'] = $_POST['color4'];
    $_SESSION['col5'] = $_POST['color5'];
?>

<!DOCTYPE html>
<html>
<link rel = "stylesheet" href = "styles.css">
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

<table>
    <tr>
       <th colspan = "6"> Here are your favorite colors </th>
    </tr>

    <tr> <!--- Row 1 --->
        <td> Your Favorite Color 1 </td>
        <td> <?php echo $_SESSION['col1']; ?> </td>
    </tr>
    <tr> <!--- Row 2 --->
        <td> Your Favorite Color 2 </td>
        <td> <?php echo $_SESSION['col2']; ?> </td>
    </tr>
    <tr> <!--- Row 3 --->
        <td> Your Favorite Color 3 </td>
        <td> <?php echo $_SESSION['col3']; ?> </td>
    </tr>
    <tr> <!--- Row 4 --->
        <td> Your Favorite Color 4 </td>
        <td> <?php echo $_SESSION['col4']; ?> </td>
    </tr>
    <tr> <!--- Row 5 --->
        <td> Your Favorite Color 5 </td>
        <td> <?php echo $_SESSION['col5']; ?> </td>
    </tr>
    <tr>
        <form action = "inputPage.php">
            <td colspan = "1"> <input type = "submit" name = "submit" value = "Back"/> 
        </form>
        <form action = "../index.php">
            <td colspan = "1"> <input type = "submit" name = "submit" value = "Back to index"/> 
        </form>
    </tr>
    </table>

</html>