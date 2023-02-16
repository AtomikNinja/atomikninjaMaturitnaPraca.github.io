<?php

if (isset($_POST["submitReg"])) {

    $meno = $_POST["menoReg"];
    $priezvisko = $_POST["priezviskoReg"];
    $email = $_POST["emailReg"];
    $pouzivatelskeMeno = $_POST["pouzivatelskeReg"];
    $heslo = $_POST["hesloReg"];
    $hesloZnova = $_POST["hesloznovaReg"];

    require_once 'dbh.inc.php';
    require_once 'funkcie.inc.php';

    if (prazdnyVstupReg($meno, $priezvisko, $email, $pouzivatelskeMeno, $heslo, $hesloZnova) !== false) {
        header("location: ../registracia.php?error=prazdnyvstup");
        exit();
    }
    //if (neplatnePouzivatelske($pouzivatelskeMeno) !== false) {
    //    header("location: ../registracia.php?error=neplatnepouzivatelskemeno");
    //    exit();
    //}
    if (neplatneEmail($email) !== false) {
        header("location: ../registracia.php?error=neplatnyemail");
        exit();
    }
    if (hesloZhoda($heslo, $hesloZnova) !== false) {
        header("location: ../registracia.php?error=heslasanezhoduju");
        exit();
    }
    if (pouzivatelskeExistuje($conn, $pouzivatelskeMeno, $email) !== false) {
        header("location: ../registracia.php?error=pouzivatelskemenoobsadene");
        exit();
    }

    vytvorPouzivatela($conn, $meno, $priezvisko, $email, $pouzivatelskeMeno, $heslo);

}
else {
    header("location: ../registracia.php");
    exit();
}