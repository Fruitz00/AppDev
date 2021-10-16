
<!DOCTYPE html>

<html>
    <head>
    <link rel = "stylesheet" href = "styles.css">
    </head>

    <body>
    <h> Welcome <h>
    <h1> Enter conversion mode: </h1>

    <form method = "post" action = "metrictometric.php">
        <input type="submit" class="button" name = "button1" value = "Metric to Metric">
    </form>
    <form method = "post" action = "imperialtoimperial.php">
        <input type="submit" class="button" name = "button2" value = "Imperial to Imperial">
    </form>
    <form method = "post" action = "backtoback.php">
        <input type="submit" class="button" name = "button3" value = "Imperial -- Metric">
    </form>

    </body>   
</html>
