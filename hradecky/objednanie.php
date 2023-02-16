<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/objednanieStyle.css">
    <title>Objednanie</title>
</head>

<body>

<?php
include_once 'header.php'
?>

    <section class="sekciaObjednanie">
        <div class="pole">

            <h2>Objednajte sa</h2>
            <p>Vidíme že sme ťa zaujali našou ponukou! Nižšie uveď svoje údaje a tvoju požiadavku pre nás a my ti s radosťou napíšeme a dohodneme sa na spolupráci. Ďakujeme!</p>

            <form action="insert.php" method="post">

                <label for="meno">Meno</label>
                <input type="text" id="Meno" name="krstneMeno" placeholder="Vaše krstné meno">

                <label for="priezvisko">Priezvisko</label>
                <input type="text" id="Priezvisko" name="priezviskoMeno" placeholder="Vaše priezvisko">

                <label for="email">E-mail</label>
                <input type="email" id="Email" name="mail" placeholder="priklad@domena.com">

                <label for="poziadavka">Vaša požiadavka</label>
                <select id="Poziadavka" name="klientPoziadavka">
                    <option value="konzultacia">Konzultácia</option>
                    <option value="fotenie">Fotenie</option>
                    <option value="poradenstvo">Poradenstvo</option>
                </select>

                <label for="odoslanie">Odoslať</label>
                <input type="submit" value="Odoslať">

            </form>

        </div>
    </section>

</body>

</html>