<?php


if($_POST["name"] == ""){
    echo "Je moet nog een naam invullen!<br>";
}elseif ($_POST["name"]){
    echo $_POST["name"]."<br>";
}
if($_POST["address"] == ""){
    echo "Je moet nog een addres invullen!<br>";
}elseif ($_POST["address"]){
    echo $_POST["address"]."<br>";
}
if($_POST["email"] == ""){
    echo "Je moet nog een email invullen!<br>";
}elseif ($_POST["email"]){
    echo $_POST["email"]."<br>";
}
if($_POST["password"] == ""){
    echo "Je moet nog een wachtwoord invullen!";
}elseif ($_POST["password"]){
    echo $_POST["password"]."<br>";
}


?>