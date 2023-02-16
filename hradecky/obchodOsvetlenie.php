<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/obchodTemaStyle.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <title>Obchod - Osvetlenie</title>
</head>
<body>

<?php
include_once 'header.php'
?>

<section class="sekciaNadpis">
    <div class="pole">
        <div class="nadpis">
            <h2>Osvetlenie</h2>
        </div>
    </div>
</section>

<section class="sekciaInfo">
    <div class="pole">
        <p>Kvalitnej fotke nesmie chýbať kvalitné osvetlenie. My pre teba ponúkame osvetlenia rôznej veľkosti a rôzneho použitia, len sa poobzeraj, sme si istí že nájdeš čo hľadáš.</p>
    </div>

</section>

<section class="sekciaKosik">

    <div class="pole">

        <h5 class="kosikNadpis" id="kosikNadpis">Košík</h5>
            
        <div class="kosikBody">
          <table class="showKosik table">
          </table>
          <div class="cenaSpolu">Cena spolu: €<span class="kosikSpolu"></span></div>
        </div>

        <div class="kosikPata">
            <a href="kosik.php">Pokračovať v nákupe</a>
        </div>

    </div>

</section>

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

<section class="sekciaObsah">
    <div class="pole">
        
    <section class="sekciaPolozky">
        
    <?php

            require_once 'includes/dbh.inc.php';

            $sql = "SELECT nazov, cena, obrazokLINK FROM produkty WHERE kategoria='osvetlenie'";
            $result = $conn->query($sql);
            

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                echo "  <article class='polozka'>
                    <a href='produkt.php?nazov=".$row["nazov"]."'>
                        <img class='polozka-img-top' src='" . $row["obrazokLINK"]. "' alt='polozkaIMG'>  
                        <h4 class='polozka-nadpis'>" . $row["nazov"]. "</h4>
                        <p class='polozka-text'>" . $row["cena"]. "€</p>
                    </a>
                    <a href='#' data-nazov='" . $row["nazov"]. "' data-cena='" . $row["cena"]. "' class='pridatDoKosika btn btnHlavny'>Pridať do košíka</a>
                
                        </article>";
                }
                

            }  else {
                echo "Žiadne výsledky";
                }

            $conn->close();

        ?>

        

    </section>

        
        
    </div>
</section>

<script src="js/script.js"></script>
</body>
</html>