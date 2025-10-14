<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $email=$_POST["email"];

    $_SESSION["nom"] = $nom;
    $_SESSION["cognom"] = $cognom;
    $_SESSION["email"]= $email;

    echo "$nom $cognom se ha logeado con el em@il: $email";

}
?>