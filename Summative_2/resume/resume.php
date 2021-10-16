<?php require 'header/header.php';?>
<body>
    <div class="frame">
        <div class="profile">
            <div class="pict"><img src = "photos/pict.jpg"></div>
            <div class="info">
                <?php echo"
                    <ul>
                        <li>
                            <h4> Name: Charles Dmitri Peñaranda</h4>
                        </li>
                        <li>
                            <h4> Age: 20 </h4>
                        </li>  
                        <li>
                            <h4> Birthday: March 1, 2001</h4>
                        </li>
                        <li>
                            <h4> Gender: Male </h4>
                        </li>   
                     </ul>
                    ";
                ?>
            </div>
        </div>
        <?php include 'career.php'; ?>
        <?php include 'education.php'; ?>
        <?php include 'skills.php'; ?>
        <?php include 'affiliation.php'; ?>
        <?php include 'experience.php'; ?>
    </div>
</body>
</html>