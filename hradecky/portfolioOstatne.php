<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/portfolioTemaStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Portfólio - Ostatné</title>
</head>
<body>
    
<?php
include_once 'header.php'
?>

    <section class="sekciaNavigacia">
        <div class="pole">
            <h2>Ostatné</h2>
            <nav>
                <a href="portfolio.php">Späť na výber tém</a>
                <a href="portfolioSlnko.php">Ďalšia téma</a>
            </nav>
        </div>
    </section>

    <section class="galeria">
        <div class="pole">
            
            <article class="polozka">
                <img src="images/ostatne1.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne2.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne3.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne4.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne5.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne6.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne7.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne8.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne9.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne10.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne11.jpg"
                    alt="ostatneIMG">
            </article>
            <article class="polozka">
                <img src="images/ostatne12.jpg"
                    alt="ostatneIMG">
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