<?php
session_start();
if(isset($_SESSION["user"])){
echo "<h1>Welkom ".$_SESSION["user"]["naam"]." op de website</h1> ";
echo "<p><a href='Login-pagina.php'>login</a> </p>";
}else{
    echo "Je bent niet ingelogd";
}