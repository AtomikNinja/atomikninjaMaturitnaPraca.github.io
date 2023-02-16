<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/portfolioTemaStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Portfólio - Kvety</title>
</head>
<body>
    
<?php
include_once 'header.php'
?>

    <section class="sekciaNavigacia">
        <div class="pole">
            <h2>Kvety</h2>
            <nav>
                <a href="portfolio.php">Späť na výber tém</a>
                <a href="portfolioOstatne.php">Ďalšia téma</a>
            </nav>
        </div>
    </section>

    <section class="galeria">
        <div class="pole">
            
            <article class="polozka">
                <img src="images/kvet1.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet2.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet3.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet4.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet5.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet6.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet7.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet8.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet9.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet10.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet11.jpg"
                    alt="kvetIMG">
            </article>

            <article class="polozka">
                <img src="images/kvet12.jpg"
                    alt="kvetIMG">
            </article>

            

        </div>
    </section>

    <section class="polozkaFull">
        <img src="https://www.infopedia.sk/wp-content/uploads/2018/05/nizke-tatry-e1525277741245.jpg" alt="">
    </section>

        </div>
    </section>
</body>
</html>

<script>

    $(".polozka").click((event) => {

        let src = $(event.target).attr("src");
        if (src == undefined) {
            src = $(event.target).children("img").attr("src");
        }

        $(".polozkaFull img").attr("src", src);

        $(".polozkaFull").css({
            display: "block",
            opacity: 0,

        });

        $(".polozkaFull").css({
            opacity: 1
        });

    });

    $(".polozkaFull").click(() => {

        $(".polozkaFull").css({ display: "none" });
    });

</script>