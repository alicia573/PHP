<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="Bakkerijvlechtbeheer%20style.css">
    </head>
    <body>
        <header id="banner">Bakkerij Vlecht Beheer
        </header>

    <div id="wrapper">
        <a href="index.php" class="links"> Overzicht broodjes</a>
        <a href="Admin.php" class="links"> Broodjes toevoegen</a>

        <h1>Broodjes weergeven</h1>
        <p>Globale informatie van de verschillende broodjes</p>
    </div>
        <?php
        include('Broodje.php');
        require ('Beheer.php');


        $brood = isset($_GET['brood']) && !empty($_GET['brood']) ? $_GET['brood']: null;
        $meel =isset($_GET['meel']) && !empty($_GET['meel']) ? $_GET['meel']: null;
        $vorm =isset($_GET['vorm']) && !empty($_GET['vorm']) ? $_GET['vorm']: null;
        $gewicht =isset($_GET['gewicht']) && !empty($_GET['gewicht']) ? $_GET['gewicht']: null;
        $image_url =isset($_GET['image_url']) && !empty($_GET['image_url']) ? $_GET['image_url']: null;

        $broodjes = new Beheer();
        $broodjes-> voegBroodje("pistol",'graan','rechthoek','70g','');


        foreach ($broodjes->getLijst($brood,$meel,$vorm,$gewicht,$image_url) as $broodj){
            echo '<p id="info-table">'. $broodj->getBrood() . '<br>' . $broodj->getMeel()
                .$broodj->getVorm() . $broodj->getGewicht(). $broodj->getImageUrl(). '</p><br>';


        }


        ?>
    </body>

</html>
