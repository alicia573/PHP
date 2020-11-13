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
            <meta charset="UTF-8">
            <title>PHP Opdracht 3.6</title>
        </head>
        <style>
            table,tr,td{
                border-collapse: collapse;
                border: solid 1px white;
            }
            td{
                padding:10px;
            }
            img{
                height: 50px;
                width: 50px;
            }
            td.border{
                border: solid 1px grey;
            }

        </style>
        <body>
        <?php
        $zwemclubs = array(
        "De Spartelkuikens" => 25,
        "De waterbuffels" => 32,
        "Plonsmderin" => 11,
        "Bommetje" => 23
        );
        echo '<table>';
        foreach ( $zwemclubs as $clubnaam => $ledenaantal){
            echo '<tr>';
            echo '<td class="border">'.$clubnaam.'</td>';
            echo '<td class="border">'.$ledenaantal.'</td>';
            $aantal_plaatjes = floor($ledenaantal /5);
            echo "<td>";
            for($i =0; $i < $aantal_plaatjes; $i++){
                echo'<img src="img/Swimmer.png" alt="Zwemmer">';
            }
            echo "</td>";
            echo "</tr>";
        }
        echo '</table>';
        ?>
        </body>
    </html>
