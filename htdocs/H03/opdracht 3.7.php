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
    <title>PHP Opdracht 3.7</title>
</head>
<style>
    img{
        width: 40px;
        height: 40px;
    }
</style>
<body>
<?php
$kappersagenda =[
    ["Mevr.Pietersen","9.15"],
    ["Mevr.Willems","9.30"],
	["", "9:45"],
    ["Paul van den Broek", "10.00"],
    ["Karel de Meeuw","10.15"],
	["", "10:30"]
];

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $afspraak ) {
    if ($afspraak[0] == "") {
        print("<li> {$afspraak[0]} om {$afspraak[1]}");

    }
}
?>
</body>
</html>
