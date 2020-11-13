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
        <title>PHP Opdracht 3.1</title>
    </head>
    <style>
        #line {
            border: 2px black solid;
            width: 1400px;
        }
        img{
            height: 300px;
            width: 300px;
            padding-right:10px ;
            padding-top: 10px;
        }
    </style>
    <body>
    <?php
    for($i = 1; $i<= 9;$i++ ) {
        echo "<img src= 'img/fish" . $i . ".jpg'>";
    } ?>
    <h1>Array</h1>
    <div id="line"></div>
    <?php
        $bomen= array("boom1.jpg","boom2.jpg","boom3.jpg");
        foreach($bomen as $boom){
            echo "<img src ='img/".$boom."'>";
        }
   ?>

    </body>
</html>
