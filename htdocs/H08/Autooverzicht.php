<?php

class Autooverzicht{
    public $autoos;

    function __construct(){
        $this->autoos = [
                new   Auto("Audi", 108250.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/audi1.jpg'),

                new   Auto("Ferrari", 99500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/ferrari1.jpg'),
                new   Auto("Ferrari", 122500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/ferrari2.jpg'),
                new   Auto("Ferrari", 152500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/ferrari3.jpg'),

                new   Auto("Fiat", 11500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/fiat1.jpg'),
                new   Auto("Fiat", 11500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/fiat2.jpg'),

                new   Auto("Mercedes",  82500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/mercedes1.jpg'),
                new   Auto("Mercedes", 132700.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/mercedes2.jpg'),
                new   Auto("Mercedes", 87500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/mercedes3.jpg'),
                new   Auto("Mercedes", 222650.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/mercedes4.jpg'),

                new   Auto("Opel", 13500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/opel1.jpg'),
                new   Auto("Opel", 9500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/opel2.jpg'),
                new   Auto("Opel", 19500.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/opel3.jpg'),

                new   Auto("Volkswagen", 16340.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/vw1.jpg'),
                new   Auto("Volkswagen", 18340.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/vw2.jpg'),
                new   Auto("Volkswagen", 21670.00,'http://php-beginners-cursus-1179.appspot.com/wheely/img/vw3.jpg')

        ];
    }
    function getAutoLijst(){
        return $this->autoos;
    }
    function voegAutoTool($merk, $prijs, $image_url){
        $newAuto = new Auto($merk, $prijs,$image_url);
        $this->autoos[] = $newAuto;

    }
    function getGefilterdeLijst($minPrijs,$maxPrijs,$merk){
        $gefilterdeLijst = [];
        foreach ($this->autoos as $auto){
            if($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && !$auto->getMerk() == $merk) {
                $gefilterdeLijst[]= $auto;
            }
        }
        return $gefilterdeLijst;
    }

}