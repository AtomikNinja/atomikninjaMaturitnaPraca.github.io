<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/portfolioStyle.css">
    <title>Portfólio</title>
</head>
<body>
    
<?php
include_once 'header.php'
?>

    <section class="uvod">
        <div class="pole">
            <div class="uvodnaLista">
                <h2>Portfólio</h2>
                <h3>Vyber si tému</h3>
            </div>
        </div>
    </section>

    <section class="sekciaTemy">
        <div class="pole">
            <div class="tema1" onclick="location.href='portfolioSlnko.php';" style="cursor: pointer;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Sunset_2007-1.jpg/1200px-Sunset_2007-1.jpg" alt="Západ slnka">
                <h4>Západy slnka</h4>
    
            </div>

            <div class="tema2" onclick="location.href='portfolioPriroda.php';" style="cursor: pointer;">
                <img src="https://www.drevenyles.sk/wp-content/uploads/2020/04/cropped-bg.jpg" alt="Les">
                <h4>Príroda</h4>

            </div>

            <div class="tema3" onclick="location.href='portfolioKvety.php';" style="cursor: pointer;">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-tulips-blooming-in-field-royalty-free-image-1584131603.jpg" alt="kvety">
                <h4>Kvety<y/h4>
            </div>

            <div class="tema4" onclick="location.href='portfolioOstatne.php';" style="cursor: pointer;">
                <img src="https://zaujimavysvet.webnoviny.sk/wp-content/uploads/2019/01/2081007846_77320b8222_b_pacific-ocean.jpg" alt="oceán">
                <h4>Ostatné</h4>
            </div>
        </div>
        
    </section>     

</body>
</html>