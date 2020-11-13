<?php
/**
 * Created by PHPStorm.
 * User: aliciafernandes
 * Date: 13-02-2020
 * Time: 09:12
 */
?>
    <!DOCTYPE HTML>
    <html lang="en">
    <head>
        <title>PHP Opdracht 3.4</title>
    </head>
    <style>
        body{
            text-align: center;
        }
        .rood{
            border: red solid 5px;

        }
        .groen{
            border: green solid 5px;

        }
        img{
            height: 175px;
            width: 175px;
        }


    </style>
    <body>
    <?php
        for($i = 1; $i <=9;$i++ ) {
            if($i % 2 == 0){
                $class = "class= 'rood'";
            } else{
                $class= "class= 'groen'";
            }
            echo "<img ".$class ."src= 'img/fish" . $i . ".jpg'>";
        }
    ?>
    </body>
    </html>
<?php
