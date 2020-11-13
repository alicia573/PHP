<?php
session_start();
echo "<link href='website-Radio-index-style.css' rel='stylesheet'>";
if(!empty($_SESSION["user"] && $_SESSION["user"]["rol"] == "Administrator")){
    echo "<h1> Welkom ".$_SESSION["user"]["naam"]." op het admingedeelte 
    van de website</h1>";
    echo "<p><a href='Login-pagina.php?loguit'>Uitloggen</a></p>";
    echo "<p><a href='Login-pagina.php'>Inloggen</a></p>";
}else{
    echo"You are not allowed on this page.".'<br>Go'. '<a id="back" href="Login-pagina.php"> back</a>';
}
