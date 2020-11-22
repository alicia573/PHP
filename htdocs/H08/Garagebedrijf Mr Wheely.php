<!DOCTYPE HTML>
 <html lang="eng">
    <head>
        <title></title>
        <link rel="stylesheet" href="Garagebedrijf%20style.css">
        <link rel="icon" type="image/gif/png">
    </head>
    <body>
        <header>
            <div class="Banner">
                <img src="http://php-beginners-cursus-1179.appspot.com/wheely/img/wheely_header.jpg" alt="">
            </div>
        </header>
    <div id="wrapper">

        <form action="Garagebedrijf%20Mr%20Wheely.php" method="POST">
            <label for="merken">Merk:</label>
            <select id="merken" name="Merken" >
                <option value>--Alle merken--</option>
                <option value="Audi">Audi</option>
                <option value="Ferrari" >Ferrari</option>
                <option value="fiat">Fiat</option>
                <option value="Mercedes" >Mercedes</option>
                <option value="Opel">Opel</option>
                <option value="Volkswagen" >Volkswagen</option>
            </select>
                <label for="minPrijs">Minimale Prijs:
                    <input type="text" name="minPrijs">
                </label>
            <label for="maxPrijs">Maximale Prijs:
                <input type="text" name="maxPrijs">
            </label>
                <input type="submit">
        </form>

        <?php
            include_once 'Auto.php';
            require'Autooverzicht.php';

            $minPrijs = isset($_POST['minPrijs']) && !empty($_POST['minPrijs']) ? $_POST['minPrijs']: 0;
            $maxPrijs = isset($_POST['maxPrijs']) && !empty($_POST['maxPrijs']) ? $_POST['maxPrijs']: 999999999.00;
            $merk = isset($_POST['Merken']) && !empty($_POST['Merken']) ? $_POST['Merken']:0 ;


            $autoos =  new Autooverzicht();
            $autoos->voegAutoTool('Audi',102500,'http://php-beginners-cursus-1179.appspot.com/wheely/img/audi1.jpg');

            foreach ($autoos->getGefilterdeLijst($minPrijs,$maxPrijs,$merk) as $auto){
                echo '<p id="info-on-pic">Merk: ' . $auto->getMerk() . '<br>' . 'Prijs: ' . $auto->getPrijs() . '</p><br>';
                echo '<img class="car-images" src="' . $auto->getImageUrl() . '" alt="" id="car-images">' . '<br>';
            }


        ?>
    </div>
    </body>

</html>



