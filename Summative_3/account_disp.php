<?php include 'header.php'?>
<div class="outline">
    <?php

        include 'db_con.php';
        $sql = "SELECT * FROM accounts";
        $result = $conn->query($sql);

        if(.$row[""])
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Full Name: " .$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."<br>Username: " . $row["user_name"]. "<br>Birthday: " .$row["birthday"]. "<br>Email: " .$row["email"]. "<br>Contact Number: " .$row["contact_number"]."</div>";
            
            }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
</div>