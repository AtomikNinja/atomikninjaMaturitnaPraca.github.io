<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/kosik.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Košík</title>
</head>

<body>

<?php
include_once 'header.php'
?>

    <section class="sekciaKosik">

        <div class="pole">

            <h5 class="kosikNadpis" id="kosikNadpis">Košík</h5>

            <form action="insert1.php" method="post">

                <div class="kosikBody">
                    <table class="showKosik table">
                    </table>
                    <div class="cenaSpolu">Cena spolu: €<span class="kosikSpolu"></span></div>
                </div>

                <label for="meno">Meno</label>
                <input type="text" id="Meno1" name="krstneMeno1" placeholder="Vaše krstné meno">

                <label for="priezvisko">Priezvisko</label>
                <input type="text" id="Priezvisko1" name="priezviskoMeno1" placeholder="Vaše priezvisko">

                <label for="adresa">Adresa</label>
                <input type="text" id="Adresa1" name="adresa1">

                <label for="psc">PSČ</label>
                <input type="text" id="Psc1" name="psc1">

                <label for="mesto">Mesto</label>
                <input type="text" id="Mesto1" name="mesto1">

                <label for="email">E-mail</label>
                <input type="email" id="Email1" name="mail1" placeholder="priklad@domena.com">

                <label for="telefon">Telefónne číslo</label>
                <input type="text" id="Telefon1" name="telefon1" placeholder="+421...">

                <label for="preprava">Typ prepravy</label>
                <select id="Preprava" name="preprava1">
                    <option value="kurierGLS">Kurieŕ GLS</option>
                    <option value="kurierUPS">Kuriér UPS</option>
                    <option value="posta">Slovenská pošta</option>
                </select>

                <textarea name="kosikJSON" id="kosikJSON" cols="30" rows="10" hidden></textarea>

                <label for="odoslanie"></label>
                <input type="submit" value="Odoslať objednávku">

            </form>

            <!--   <div class="kosikPata">
                <button class="resetovatKosik btn btnReset">Dokončiť objednávku</button>
            </div>  -->

        </div>

    </section>

    <section class="sekciaPata">
        <div class="pole">



        </div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>

<script>

</script>