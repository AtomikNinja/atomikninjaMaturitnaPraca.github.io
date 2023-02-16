<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Ročníková práca - Hradecký</title>
</head>

<div class="menu">

    <div class="pole">

        <a href="index.php" class="logo">Alexandria<span>Photography</span></a>

            <nav>

                <ul class="prvaLista">
                    <li><a href="index.php"><button>Domov</button></a></li>
                    <li><a href="portfolio.php"><button>Portfólio</button></a></li>
                    <li><a href="obchod.php"><button>Obchod</button></a></li>
            
                </ul>

                <ul class="druhaLista">
                    <li><a href="kontakt.php"><button>Kontakt</button></a></li>
                    <li><a href="kosik.php"><button class="objednanie">Košík</button></a></li>
                    <li><a href="objednanie.php"><button class="objednanie">Objednať sa</button></a></li>
                    <?php
                        if (isset($_SESSION["pouzivatelid"])) {
                            echo "<li><a href='includes/odhlasenie.inc.php'><button>Odhlásiť sa</button></a></li>";
                        }
                        else {
                            echo "<li><a href='registracia.php'><button>Registrácia</button></a></li>";
                            echo "<li><a href='prihlasenie.php'><button>Prihlásiť sa</button></a></li>";
                        }
                    ?>
                </ul>
            </nav>
    </div>

</div>