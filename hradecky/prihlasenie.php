<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/objednanieStyle.css">
    <title>Prihlásenie</title>
</head>

<body>

<?php
include_once 'header.php'
?>

    <section class="sekciaObjednanie">
        <div class="pole">

            <h2>Prihlásenie</h2>

            <form action="includes/prihlasenie.inc.php" method="post">

                <label for="pouzivatelskeMeno">Používateľské meno</label>
                <input type="text" name="pouzivatelskePri" placeholder="Používateľské meno/email">  
                
                <label for="heslo">Heslo</label>
                <input type="password" name="hesloPri" placeholder="Heslo">

                <label for="submit">Prihlásiť sa</label>
                <button type="submit" name="submitPri">Prihlásiť sa</button>
            </form>

        </div>

        <?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "prazdnyvstup") {
        echo "<p>Vyplňte všetky polia!</p>";
    }
    else if ($_GET["error"] == "zlePrihlasenie") {
        echo "<p>Nesprávne prihlasovacie údaje!</p>";
    } 
}
?>

    </section>

</body>

</html>