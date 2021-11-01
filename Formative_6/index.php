<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $color = $_POST['color'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        
        
        //validation
        include 'dbcon.php';

        $sql = "INSERT INTO dogs(`name`, `breed`, `age`, `address`, `color`, `height`, `weight`)
                    VALUES('$name','$breed','$age','$address','$color','$height','$weight')";
        
        $result = mysqli_query($conn, $sql);
        if($result){
            // echo "Submitted Successfully";
        }else{
            // echo "Error Occured";
        }
    }
    else{
        echo "hello";
    }
?>

<?php include 'header.php'?>
<body>
    <div class="regBox">
        <br><br>
        <h1 align = "center">Dog Information</h1>
        <br>
        <form method = "post">
            <!-- Email input -->
            <div class="form-outline mb-4">
            <input type="text" name ="name" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Name</label>
            </div>
        
            <!-- Password input -->
            <div class="form-outline mb-4">
            <input type="text" name ="breed" class="form-control" required = "">
            <label class="form-label" for="form1Example2">Breed</label>
            </div>
            
            <!-- age input -->
            <div class="form-outline mb-4">
            <input type="number" name ="age" class="form-control" min = "0" max = "90" required = "">
            <label class="form-label" for="form1Example2">Age</label>
            </div>

            <!-- address input -->
            <div class="form-outline mb-4">
            <input type="text" name ="address" class="form-control"  required = "">
            <label class="form-label" for="form1Example2">Address</label>
            </div>
            
            <!-- color input -->
            <div class="form-outline mb-4">
            <input type="text" name ="color" class="form-control"  required = "">
            <label class="form-label" for="form1Example2">Color</label>
            </div>

            <!-- height Input -->
            <div class="form-outline mb-4">
            <input type="number" name ="height" class="form-control"  required = "">
            <label class="form-label" for="form1Example2">Height</label>
            </div>
                
            <!-- weight Input -->
            <div class="form-outline mb-4">
            <input type="number" name ="weight" class="form-control" required = "">
            <label class="form-label" for="form1Example2">Weight</label>
            </div>
        
            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-block" name = "submit" value = "Submit"></button>

            <!-- Show button -->
            <button onclick="myFunction()" class="btn btn-primary btn-block" style = "margin-left: 134px">Show Database</button>
            <script>
                function myFunction() {
                 window.open("DogView.php");
                 }
            </script>
        </form>
    </div>

</body>
</html>