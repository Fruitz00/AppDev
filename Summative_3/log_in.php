<?php
    include 'header.php'
?>

<body>
    <div class="regBox">
        <br><br>
        <h2 align = "center">My Personal Information</h2>
        <br><br>
        <h3 align = "center">Log In</h3>
        <br>
        <form method = "post">
            

            <!-- User Name -->
            <div class="form-outline mb-4">
            <input type="text" name ="userName" class="form-control" required = "">
            <label class="form-label" for="form1Example1">User Name</label>
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
            <input type="text" name ="pass" class="form-control" required = "">
            <label class="form-label" for="form1Example1">Password</label>
            </div>

            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-block" name = "submit" value = "Submit"></button>

            <!-- Show button -->
            <button onclick="myFunction()" class="btn btn-primary btn-block" style = "margin-left: 134px">Show Database</button>
        </form>
    </div>

</body>