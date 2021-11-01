<?php include 'header.php'?>
<div class="outline">
    <?php

        include "dbcon.php";
    
        $sql = "SELECT * FROM dogs";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='dispBox'>Dog " . $row["dog_id"]. "<br>Name: " . $row["name"]. "<br>Breed" . $row["breed"]. "<br>Address" .$row["address"]. "<br>Color" .$row["color"]. "<br>Height" .$row["height"]. "<br>Weight" .$row["weight"]."</div>";
            
            }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
</div>