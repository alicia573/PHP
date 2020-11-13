
<?php
    include_once ('lib/Programma.php');
    include_once ('lib/liedjes.php');
    include_once ('Radio-style.css');

    $ditProgramma = new Programma();
    $ditProgramma ->setNaam("mijn eerste programma");
    $ditProgramma->setOmschrijving("Even testen");

    foreach ($ditProgramma->getProgramma() as $p){
        echo $p."<br>";
    }

    $nieuwliedje = new liedjes("dit is de titel <br>","rolling stones");
    $nieuwliedje = new liedjes("dit is de titel <br>","rolling stones");
    $nieuwliedje = new liedjes("dit is de titel <br>","hey stones");


    echo $nieuwliedje->getTitel();
    echo $nieuwliedje->getArtiest();
