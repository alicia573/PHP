
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
        <title>PHP Opdracht 3.2</title>
    </head>
    <style>
      body{
          padding-top: 30px;
          text-align: center;
      }
    </style>
    <body>
   <?php
        $sterren = 9;
        $ster = 0;
        for($i = 0; $i <=9; $i++ ){
            for($j = 0; $j <$i; $j++){
                echo"*";
            }
            echo "*<br>";
        }
        ?>
    </body>
</html>
