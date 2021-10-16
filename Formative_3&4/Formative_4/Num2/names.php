<!DOCTYPE html>
<html>
<head>
     <title> Technical 4 part 2  </title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "tophead">
        <?php echo "<h1> List of Names </h1><br>"; ?>
        <div class = "mainbody">
            <div class = "content">
                <?php
                    $arrNames = array("yoimiya", "kokomi", "eula", "zhongli","hu Tao","jean","ganyu","mona","xiao","venti","tabibito","albedo","ei","tartaglia","venti","klee","qiqi","keqing","diluc","ayaka");
                    $arrLength = count($arrNames);
                    echo "<div border-width = 2><h5>Name</h5></div>";
                    echo "<div><h5>Number of characters</h5></div>";
                    echo "<div><h5>Uppercase first character</h5></div>";
                    echo "<div><h5>Replace vowels with @</h5></div>";
                    echo '<div><h5>Check position of character "a"</h5></div>';
                    echo "<div><h5>Reverse name</h5></div>";
                        for ($i = 0; $i < $arrLength; $i++){
                            echo "<div>$arrNames[$i]</div>";
                            echo "<div>".strlen($arrNames[$i])."</div>";
                            echo "<div>".ucfirst($arrNames[$i])."</div>";
                            echo "<div>".str_replace(["a","e","i","o","u"], "@",$arrNames[$i])."</div>";
                            echo "<div>".strpos($arrNames[$i], "a")."</div>";
                            echo "<div>".strrev($arrNames[$i])."</div>";
                        }
                ?>
            </div>    
        </div>    
    </div>
</body>
</html>