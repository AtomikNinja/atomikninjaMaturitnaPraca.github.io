<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/obchodPolozka.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/kosik.js"></script>
    <title>Produkt</title>
</head>
<body>

<?php
include_once 'header.php'
?>

<section class="sekciaMenu">
    <div class="pole">
        <ul class="tlacidla">
                <li><a href="obchodFotoaparaty.php"><button>Fotoaparáty</button></a></li>
                <li><a href="obchodObjektivy.php"><button>Objektívy</button></a></li>
                <li><a href="obchodOsvetlenie.php"><button>Osvetlenie</button></a></li>
                <li><a href="obchodStativy.php"><button>Statívy</button></a></li>
        </ul>
    </div>
</section>

    <?php
        require_once 'includes/dbh.inc.php';

        $podmienka = $_GET['nazov'];

        $sql = "SELECT nazov, kratkyPopis, popis, cena, obrazokLink FROM produkty WHERE nazov='$podmienka'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()){
            echo "<section class='sekciaProdukt'>
                    <div class='pole'>

                        <img src='" . $row["obrazokLink"]. "'>
                    <div class='obsah'>
                        <h3>" . $row["nazov"]. "</h3>
                        <p id='cena'>" . $row["cena"]. "€</p>
            
                        <p>" . $row["kratkyPopis"]. "</p>

                        <p>" . $row["popis"]. "</p>

                        <a href='#' data-nazov='" . $row["nazov"]. "' data-cena='" . $row["cena"]. "' class='pridatDoKosika btn btnHlavny'><button>Pridať do košíka</button></a>
                    </div>
                    </div>
                </section>";
            }
    

        

        ?>
</body>

<script src="js/script.js"></script>
</html>

