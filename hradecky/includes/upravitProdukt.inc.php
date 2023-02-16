<?php

if (isset($_POST["submitProdukt"])) {

    $id = $_POST["produktId"];
    $novaCena = $_POST["produktCena"];

    require_once 'dbh.inc.php';
    require_once 'funkcie.inc.php';

    upravProdukt($conn, $id, $novaCena);

}
else {
    header("location: ../upravitProdukt.php");
    exit();
}