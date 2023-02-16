<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/objednanieStyle.css">
    <title>Odstránenie produktu</title>
</head>

<body>

<?php
    if (isset($_SESSION["pouzivatelid"]) != 1) {
        header("location: index.php");
    }
?>

<?php
include_once 'header.php'
?>

    <section class="sekciaObjednanie">
        <div class="pole">

            <h2>Odstránenie produktu</h2>

            <form action="includes/odstranitProdukt.inc.php" method="post">

                <label for="id">ID produktu na odstránenie</label>
                <input type="number" name="produktId" placeholder="ID produktu">

                <label for="submit">Odstránit produkt</label>
                <button type="submit" name="submitProdukt">Odstrániť produkt</button>
            </form>

        </div>

        <?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "ziadny") {
        echo "<p>Produkt bol odstránený!</p>";
    }
}
?>

    </section>

</body>

</html>