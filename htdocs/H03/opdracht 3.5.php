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
            <title>PHP Opdracht 3.5</title>
        </head>
        <style>

        </style>
        <body>
            <?php
                $leeftijd= 0;
                $busreis = 10;
                if($leeftijd >= 65){
                    echo $busreis / 2 ." Euro";
                }
                if($leeftijd >=12){
                    echo $busreis / 2 ." Euro";
                }
                if ($leeftijd <= 3){
                    echo "Gratis";

                }
            ?>
        </body>
    </html>
