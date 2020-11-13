<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="Monkeystyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link rel="icon" type="image/gif/png" href="img/monkey-business.jpg"">
    </head>
        <body>
            <div id="wrapper">
                <img src="img/monkey-business.jpg" id="business-img">
                <h2>Select your Monkey</h2>
                <img src="img/monkey_swings.png" id="swing-img">
                <?php
                include_once ('lib/Monkeys.php');
                $Baviaan = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Baviaan&tbm=isch">Baviaan</a>');
                $Guereza = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Guereza&tbm=isch">Guereza</a>');
                $Langoer = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Langoer&tbm=isch">Langoer</a>');
                $Neusaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Neusaap&tbm=isch">Neusaap</a>');
                $Tamarin = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Tamarin&tbm=isch">Tamarin</a>');
                $Brulaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Brulaap&tbm=isch">Brulaap</a>');
                $Halfaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Halfaap&tbm=isch">Halfaap</a>');
                $Mandril = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Mandriln&tbm=isch">Mandril</a>');
                $Oekari = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Oekarin&tbm=isch">Oekari</a>');
                $Faunaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Faunaap&tbm=isch">Faunaap</a>');
                $Hoelman = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Hoelman&tbm=isch">Hoelman</a>');
                $Meerkat = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Meerkat&tbm=isch">Meerkat</a>');
                $Oormaki = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Oormaki&tbm=isch">Oormaki</a>');
                $Gorilla = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Gorilla&tbm=isch">Gorilla</a>');
                $Kuifaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Kuifaap&tbm=isch">Kuifaap</a>');
                $Mensaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Mensaap&tbm=isch">Mensaap</a>');
                $Spinaap = new Monkeys('<a class="aap" href="https://www.google.nl/search?q=Spinaap&tbm=isch">Spinaap</a>');








                echo $Baviaan->getMonkeys().'<br>'.$Guereza->getMonkeys().'<br>'.$Langoer->getMonkeys().'<br>'.$Neusaap->getMonkeys()
                 .'<br>'.$Tamarin->getMonkeys().'<br>'.$Brulaap->getMonkeys().'<br>'.$Halfaap->getMonkeys().'<br>'.$Mandril->getMonkeys().'<br>'
                 .$Oekari->getMonkeys().'<br>'.$Faunaap->getMonkeys().'<br>'.$Hoelman->getMonkeys().'<br>'.$Meerkat->getMonkeys().'<br>'
                 .$Oormaki->getMonkeys().'<br>'.$Gorilla->getMonkeys().'<br>'.$Kuifaap->getMonkeys().'<br>'.$Mensaap->getMonkeys().'<br>'
                .$Spinaap->getMonkeys();

                ?>
            </div>

        </body>

</html>

