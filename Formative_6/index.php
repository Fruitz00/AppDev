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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
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
        </form>
    </div>
</body>
</html>