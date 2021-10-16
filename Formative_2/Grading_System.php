<?php
  $name = "Cardo Immortal Dalisay";
  $grade = 98;
?>

<!DOCTYPE html>
</html>
<head>
  <title>Grading System</title>
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <style>
  .titleBox{
    position: absolute;
    width: 800px;
    height: 100px;
    left: 100px;
    top: 50px;
    background: #4B3869;
    border-radius: 20px;  
  }
  .box1{
    position: absolute;
    width: 800px;
    height: 400px;
    left: 100px;
    top: 175px;
    background: #4B3869;
    border-radius: 20px;
  }

  .nameBox{
    position: absolute;
    width: 390px;
    height: 45px;
    left: 71px;
    top: 78px;
    background: #664E88;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
  }

  .imageBox{
    position: absolute;
    width: 250px;
    height: 250px;
    left: 510px;
    top: 77px;

    background: #FFFFFF;
    border-radius: 20px;
  }

  .rankBox{
    position: absolute;
    width: 175px;
    height: 164px;
    left: 81px;
    top: 154px;

    background: #664E88;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;  
  }

  .gradeBox{
    position: absolute;
    width: 175px;
    height: 164px;
    left: 276px;
    top: 154px;

    background: #664E88;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 20px;    
  }

  img{
    border-radius: 12px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

  }

.text1{
  position: absolute;
  width: 79px;
  height: 38px;
  left: 48px;
  top: 19px;
  font-size: 25px;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  color: #A9E4D7;
}

.text2{
  
position: absolute;
width: 175px;
height: 119px;
left: 0px;
top: 46px;
display: flex;
font-size: 40px;
align-items: center;
text-align: center;
justify-content: center;
color: #A9E4D7;
}

p{
  text-align: center;
  vertical-align: center;
}

body{
   font-family: 'Comfortaa';font-size: 22px;
   color: #A9E4D7;  
}

  </style>
</head>

<body>
<div class="titleBox">
  <h1 align="center">Grade Card</h1>
</div>
<div class = "box1">
  <div class = "nameBox">
    <p><?php echo $name?></p>
  </div>
  <div class = "imageBox" >
    <img src="images/stock_photo.jpg" width="250" height="250">  
  </div>
  <div class="rankBox">
    <div class="text1"><h3>Rank:</h3></div>
    <div class="text2">
      <h1>
      <?php 
      if ($grade >= 93 && $grade <= 100 ){
        echo "A"; 
      }else if ($grade >= 90 && $grade <= 92 ){
        echo "A-";
      }else if ($grade >= 87 && $grade <= 89 ){
        echo "B+";
      }else if ($grade >= 83 && $grade <= 86 ){
        echo "B";
      }else if ($grade >= 80 && $grade <= 82 ){
        echo "B-";
      }else if ($grade >= 77 && $grade <= 79 ){
        echo "C+";
      }else if ($grade >= 73 && $grade <= 76 ){
        echo "C";
      }else if ($grade >= 70 && $grade <= 72 ){
        echo "C-";
      }else if ($grade >= 67 && $grade <= 69 ){
        echo "D+";
      }else if ($grade >= 63 && $grade <= 66 ){
        echo "D";
      }else if ($grade >= 60 && $grade <= 62 ){
        echo "D-";
      }else if ($grade < 60){
        echo "F-";
      }else{
        echo "INC";
      }
      ?>  
    </h1>
    </div> 
  </div>
  <div class="gradeBox">
    <div class="text1">
      <h3 align="center">Grade:</h3>   
    </div>
    <div class="text2">
      <h1><?php echo $grade?></h1>
    </div>
    
  </div>
</div>

</body>

