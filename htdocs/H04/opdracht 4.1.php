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
    <title>PHP Opdracht 4.1</title>
</head>
    <body>
        <?php
        function degreesCalculation(){
            $a= 20;
            echo $a * 9 / 5 + 32;
        }
        echo degreesCalculation()." °F".'<br><br>';
        //---------------------------------------------
        function divideble( $number){
            $divideble = false;
            if($number % 3 == 0){
                $divideble = true;
            }
            if($divideble == true) {
                echo '<br>'."True".'<br>';
            }
            else{
                echo '<br>'."False".'<br>';
            }
        }
        divideble(22);

        //-----------------------------------------
        function turnaround($string){
            echo'<br><br>'.strrev($string);
        }
        turnaround("Hallo mijn naam is Alicia!!!");
        ?>

    </body>
</html>
