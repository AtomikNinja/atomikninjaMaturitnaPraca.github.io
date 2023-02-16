<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Ročníková práca - Hradecký</title>
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

    <section class="sekciaAdmin">
        <div class="pole">

                <a href="pridatProdukt.php">Pridať produkt</a>
                <a href="odstranitProdukt.php">Odstrániť produkt</a>
                <a href="upravitProdukt.php">upraviť produkt</a>

            <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "firma";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                       die("ERROR: Could not connect. " . $conn->connect_error);
                    }

                    $sql = "SELECT objednavka_id, datum, meno, priezvisko, adresa, psc, mesto, email, telefon, preprava, tovar FROM objednavky";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>ID_objednavky</th><th>Datum</th><th>Meno</th><th>Priezvisko</th><th>Adresa</th><th>PSC</th><th>Mesto</th><th>Email</th><th>Telefon</th><th>Preprava</th><th>Tovar</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["objednavka_id"]. "</td><td>" . $row["datum"]. "</td><td>" . $row["meno"]. "</td><td>" . $row["priezvisko"]. "</td><td>" . $row["adresa"]. "</td><td>" . $row["psc"]. "</td><td>" . $row["mesto"]. "</td><td>" . $row["email"]. "</td><td>" . $row["telefon"]. "</td><td>" . $row["preprava"]. "</td><td>" . $row["tovar"]. "</td></tr>";
                        }
                        echo "</table>";
                    }  else {
                        echo "Žiadne výsledky";
                        }




                        $sql = "SELECT poziadavka_id, datum, meno, priezvisko, email, poziadavka FROM poziadavky";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>ID_poziadavky</th><th>Datum</th><th>Meno</th><th>Priezvisko</th><th>Email</th><th>Poziadavka</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["poziadavka_id"]. "</td><td>" . $row["datum"]. "</td><td>" . $row["meno"]. "</td><td>" . $row["priezvisko"]. "</td><td>" . $row["email"]. "</td><td>" . $row["poziadavka"]. "</td></tr>";
                        }
                        echo "</table>";
                    }  else {
                        echo "Žiadne výsledky";
                        }



                        $sql = "SELECT pouzivatel_id, meno, priezvisko, email, pouzivatelskeMeno, heslo FROM pouzivatelia";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>ID_pouzivatela</th><th>Meno</th><th>Priezvisko</th><th>Email</th><th>Pouzivatelske meno</th><th>Heslo</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["pouzivatel_id"]. "</td><td>" . $row["meno"]. "</td><td>" . $row["priezvisko"]. "</td><td>" . $row["email"]. "</td><td>" . $row["pouzivatelskeMeno"]. "</td><td>" . $row["heslo"]. "</td></tr>";
                        }
                        echo "</table>";
                    }  else {
                        echo "Žiadne výsledky";
                        }




                        $sql = "SELECT produkt_id, nazov, kategoria, kratkyPopis, popis, cena, obrazokLINK FROM produkty";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>ID_produktu</th><th>Nazov</th><th>Kategoria</th><th>Kratky popis</th><th>Popis</th><th>Cena</th><th>Link na obrazok</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["produkt_id"]. "</td><td>" . $row["nazov"]. "</td><td>" . $row["kategoria"]. "</td><td>" . $row["kratkyPopis"]. "</td><td>" . $row["popis"]. "</td><td>" . $row["cena"]. "</td><td>" . $row["obrazokLINK"]. "</tr>";
                        }
                        echo "</table>";
                    }  else {
                        echo "Žiadne výsledky";
                        }

                    $conn->close();

                ?>
                

        </div>
    </section>

</body>

</html>