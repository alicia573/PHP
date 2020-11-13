<?php
    if ($_POST['email'] == 'piet@worldonline.nl' && $_POST['password'] == 'doetje123') {
        echo "Welkom!";
    }
    if ($_POST['email'] == 'laas@carpets.nl' && $_POST['password'] == 'snoepje777') {
        echo "Welkom!";
    }
    if ($_POST['email'] == 'truushendriks@wegweg.nl' && $_POST['password'] == 'arkiearkie201') {
        echo "Welkom!";
    }
    else{
        echo "Sorry,geen toegang.";
    }