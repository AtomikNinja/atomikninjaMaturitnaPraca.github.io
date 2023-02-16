<?php

if (isset($_POST["submitProdukt"])) {

    $id = $_POST["produktId"];

    require_once 'dbh.inc.php';
    require_once 'funkcie.inc.php';

    odstranProdukt($conn, $id);

}
else {
    header("location: ../odstranitProdukt.php");
    exit();
}