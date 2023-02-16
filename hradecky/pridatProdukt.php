<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/objednanieStyle.css">
    <title>Pridanie produktu</title>
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

            <h2>Pridanie produktu</h2>

            <form action="includes/pridatProdukt.inc.php" method="post">

                <label for="nazov">Názov produktu</label>
                <input type="text" name="produktNazov" placeholder="Názov produktu">

                <label for="kategoria">Kategória produktu</label>
                <select id="kategoria" name="produktKategoria">
                    <option value="fotoaparaty">Fotoaparáty</option>
                    <option value="objektivy">Objektívy</option>
                    <option value="osvetlenie">Osvetlenie</option>
                    <option value="stativy">Statívy</option>
                </select>

                <label for="kratkyPopis">Krátky popis produktu</label>
                <input type="text" name="produktKratkyPopis" placeholder="Krátky popis produktu">

                <label for="popis">Popis produktu</label>
                <input type="text" name="produktPopis" placeholder="Popis produktu">

                <label for="cena">Cena produktu</label>
                <input type="text" name="produktCena" placeholder="Cena produktu">

                <label for="obryzok">Obrázok produktu</label>
                <input type="text" name="produktObrazok" placeholder="Link na obrázok produktu">

                <label for="submit">Pridať produkt</label>
                <button type="submit" name="submitProdukt">Pridať produkt</button>
            </form>

        </div>

        <?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "stmtzlyhalo") {
        echo "<p>Niečo sa pokazilo... skúste znovu</p>";
    }
    else if ($_GET["error"] == "ziadny") {
        echo "<p>Produkt bol pridaný!</p>";
    }
}
?>

    </section>

</body>

</html>