<?php
$value = 0;
    /* 
        FORMAT:
            Image file name, (Do not include file extensions (.png, .jpg, etc))
            Name of Fruit,
            Description,
            Facts
    */
    $fruitArray = array (
        array("apple",
            "Apple",
            "The round fruit of a tree of the rose family, which typically has thin red or green skin and crisp flesh.
            Many varieties have been developed as dessert or cooking fruit or for making cider.",
            "Even though the crab apple is the only variety native to North America, thousands of types of apples are grown in the United States.
            Red Delicious, Fuji, Golden Delicious, Braeburn, McIntosh, Rome, Granny Smith, and Gala are a few of the most popular varieties grown in the U.S."
        ),

        array("banana",
              "Banana",
              "Bananas are one of the most popular fruits worldwide. They contain essential nutrients that can have a protective impact on health.
              Eating bananas can help lower blood pressure and may reduce the risk of cancer.",
              "Bananas float in water because they are less dense in comparison.
              Bananas are one of the most popular fruits in the American diet.
              Bananas grow on plants that are officially considered an herb.
              The banana is actually classified as a berry."
        ),

        array("cherry",
                "Cherry",
                "Cherries are small stone fruits that come in a variety of colors and flavors. There are two major categories — tart and sweet cherries, or Prunus cerasus L. and Prunus avium L., respectively.
                Their colors can vary from yellow to deep blackish-red.",
                "The high concentration of plant compounds in cherries may be responsible for this fruit’s many health benefits.
                Though the amount and type can vary depending on the variety, all cherries are packed with antioxidants and anti-inflammatory compounds. "
        ),
            

        array("grapes",
                "Grapes",
                "A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis.
                Grapes can be eaten fresh as table grapes, used for making wine, jam, grape juice, jelly, grape seed extract, vinegar, and grape seed oil, or dried as raisins, currants and sultanas. Grapes are a non-climacteric type of fruit, generally occurring in clusters.",
                "There are more than 8,000 grape varieties from about 60 species. The main types are American and European. One cup of grapes, with about 100 calories, provides more than a quarter of the daily recommended values of vitamins K and C. Grape seeds, which are edible, are chock-full of antioxidants."
        ),

        array("jackfruit",
                "Jackfruit",
                "Jackfruit is a tropical tree fruit grown in Asia, Africa and South America. Under its thick, bumpy rind is a stringy flesh that you can eat raw or cooked in a variety of dishes. Jackfruit is the largest tree-borne fruit in the world, weighing up to 40 pounds or more",
                "A mature jackfruit tree can produce about 100 to 200 fruits in a year. Jackfruit is the largest tree-borne fruit in the world, reaching 36 kilograms (80 pounds) in weight and up to 91 centimeters (36 inches) long and 50 centimeters (20 inches) in diameter."  
        ),

        array("kiwi",
                "Kiwi",
                "Kiwi, (Actinidia deliciosa), also called kiwifruit or Chinese gooseberry, woody vine and edible fruit of the family Actinidiaceae. The plant is native to mainland China and Taiwan and is also grown commercially in New Zealand and California. The fruit has a slightly acid taste and can be eaten raw or cooked. The juice is sometimes used as a meat tenderizer. Raw kiwis are high in vitamins C and K.",
                "Kiwi vines are dioecious, meaning that male and female flowers are borne on separate individuals. Generally, one male plant can facilitate the pollination of three to eight female plants. The ellipsoidal kiwi fruit is a true berry and has furry brownish green skin. The firm translucent green flesh has numerous edible purple-black seeds embedded around a white centre. The deciduous leaves are borne alternately on long petioles (leaf stems), and young leaves are covered with reddish hairs."
        ),

        array("lime",
                "Lime",
                "A lime, is a citrus fruit, which is typically round, green in color, 3–6 centimetres in diameter, and contains acidic juice vesicles. There are several species of citrus trees whose fruits are called limes, including the Key lime, Persian lime, kaffir lime, and desert lime.",
                "Limes are native to India. They were probably introduced in the New World in the late 15th century by Christopher Columbus, who carried lime seeds with him on his second voyage.<br>
                Lime juice is used in cooking and in drinks. Lime oils are often used in perfumes and cosmetics.<br>
                Limes sink whereas lemons float"
        ),

        array("mango",
                "Mango",
                "A mango is an edible stone fruit produced by the tropical tree Mangifera indica which is believed to have originated from the region between northwestern Myanmar, Bangladesh, and northeastern India. M. indica has been cultivated in South and Southeast Asia since ancient times resulting in two distinct types of modern mango cultivars: the 'Indian type
                and the 'Southeast Asian type'. Other species in the genus Mangifera also produce edible fruits that are also called 'mangoes', the majority of which are found in the Malesian ecoregion.",
                "Mangoes first appeared in India over 5,000 years ago. Around 300 or 400 A.D., the seeds spread from Asia to the Middle East, East Africa, and South America thanks to traveling humans. Mangoes are related to cashews and pistachios. Their trees can grow up to 100 feet with a canopy of over 35 feet."
        ),

        array("melon",
                "Melon",
                "A melon is any of various plants of the family Cucurbitaceae with sweet, edible, and fleshy fruit. The word 'melon' can refer to either the plant or specifically to the fruit. Botanically, a melon is a kind of berry, specifically a 'pepo'.",
                "Yubari King melons are the most expensive melons in the world. They are known for a uniquely sweet flavor and grow only in a small region of Japan, making them highly coveted. Two of these melons recently sold for more than $20,000!"
        ),

        array("tomato",
                "Tomato",
                "The tomato (Solanum lycopersicum) is a fruit from the nightshade family native to South America. Despite botanically being a fruit, it's generally eaten and prepared like a vegetable. ... Usually red when mature, tomatoes can also come in a variety of colors, including yellow, orange, green, and purple.",
                "1. Tomatoes Are Not Always Red<br>
                2. There Are Over 10 Thousand Varieties Of Tomato<br>
                3. Tomatoes Are Technically A Fruit<br>
                4. Tomatoes Have Been to Space<br>
                5. Tomatoes Are Very Rich in Lycopene"
                )

        );
        
?>


<!DOCTYPE html>
<html>
<head>
    <link rel = 'stylesheet' href = 'styles.css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
</head>
<body class = 'pageColor'>
<!--- Nav Bar --->
<form action = '../index.php'>
<div class = 'navigation'>
    Fruits!
    <button type = 'submit'> Back to index! </button>
</div>
</form>
<!--- Table --->
<div class = 'tableHolder'>
    <table class = 'tableColor'> 
        <tr> 
            <th colspan = "4"> My Fruits </th>
        </tr>
        <tr>
            <th> Image </th>
            <th> Name </th>
            <th> Description </th>
            <th> Facts </th>
        </tr>  
        <!--- PHP Logic For Printing everything in the array. Automatically adds table rows / column when you add more elements --->
        <?php 
            for($i = 0; $i < count($fruitArray); $i++){
                echo '<tr>';
                for($x = 0; $x < 4; $x++){
                    #Every Column
                    if ($x == 0){
                        $pictureRow = 'Pictures/'.$fruitArray[$i][0].'';
                        echo '<td> <img src ="'.$pictureRow.'.png" </img> </td>';     
                        $x += 1;                  
                    }
                    echo '<td>'.$fruitArray[$i][$x].'</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
<div>

</body>
</html>