<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/objednanieStyle.css">
    <title>Registrácia</title>
</head>

<body>

<?php
include_once 'header.php'
?>

    <section class="sekciaObjednanie">
        <div class="pole">

            <h2>Registrácia</h2>

            <form action="includes/registracia.inc.php" method="post">

                <label for="meno">Krstné meno</label>
                <input type="text" name="menoReg" placeholder="Krstné meno">

                <label for="priezvisko">Priezvisko</label>
                <input type="text" name="priezviskoReg" placeholder="Priezvisko">

                <label for="email">E-mail</label>
                <input type="text" name="emailReg" placeholder="Email">

                <label for="pouzivatelskeMeno">Používateľské meno</label>
                <input type="text" name="pouzivatelskeReg" placeholder="Používateľské meno">

                <label for="heslo">Heslo</label>
                <input type="password" name="hesloReg" placeholder="Heslo">

                <label for="hesloZnovu">Opakovať heslo</label>
                <input type="password" name="hesloznovaReg" placeholder="Zopakovať heslo">

                <label for="submit">Registrovať sa</label>
                <button type="submit" name="submitReg">Registrovať sa</button>
            </form>

        </div>

        <?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "prazdnyVstupReg") {
        echo "<p>Vyplňte všetky polia!</p>";
    }
    else if ($_GET["error"] == "neplatnepouzivatelskemeno") {
        echo "<p>Zvoľte si správne používateľské meno!</p>";
    }
    else if ($_GET["error"] == "neplatnyemail") {
        echo "<p>Zvoľte si správny email!</p>";
    }
    else if ($_GET["error"] == "heslasanezhoduju") {
        echo "<p>Vaše heslá sa nezhodujú!</p>";
    }
    else if ($_GET["error"] == "pouzivatelskemenoobsadene") {
        echo "<p>Vaše zvolené používateľské meno je už registrované!</p>";
    }
    else if ($_GET["error"] == "stmtzlyhalo") {
        echo "<p>Niečo sa pokazilo... skúste znovu</p>";
    }
    else if ($_GET["error"] == "ziadny") {
        echo "<p>Úspešne ste sa zaregistrovali!</p>";
    }
}
?>

    </section>

</body>

</html>