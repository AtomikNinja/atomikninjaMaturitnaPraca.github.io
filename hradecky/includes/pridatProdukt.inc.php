<?php

if (isset($_POST["submitProdukt"])) {

    $nazov = $_POST["produktNazov"];
    $kategoria = $_POST["produktKategoria"];
    $kratkyPopis = $_POST["produktKratkyPopis"];
    $popis = $_POST["produktPopis"];
    $cena = $_POST["produktCena"];
    $obrazokLink = $_POST["produktObrazok"];

    require_once 'dbh.inc.php';
    require_once 'funkcie.inc.php';

    vytvorProdukt($conn, $nazov, $kategoria, $kratkyPopis, $popis, $cena, $obrazokLink);

}
else {
    header("location: ../pridatProdukt.php");
    exit();
}