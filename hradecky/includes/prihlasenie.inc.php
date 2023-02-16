<?php

if (isset($_POST["submitPri"])) {

    $pouzivatelskeMeno = $_POST["pouzivatelskePri"];
    $heslo = $_POST["hesloPri"];

    require_once 'dbh.inc.php';
    require_once 'funkcie.inc.php';

    if (prazdnyVstupPri($pouzivatelskeMeno, $heslo) !== false) {
        header("location: ../prihlasenie.php?error=prazdnyvstup");
        exit();
    }

    prihlasPouzivatela($conn, $pouzivatelskeMeno, $heslo);    
}
else {
    header("location: ../prihlasenie.php");
    exit();
}