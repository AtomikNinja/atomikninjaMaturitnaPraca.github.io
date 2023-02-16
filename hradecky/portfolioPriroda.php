<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/portfolioTemaStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Portfólio - Príroda</title>
</head>
<body>
    
<?php
include_once 'header.php'
?>

    <section class="sekciaNavigacia">
        <div class="pole">
            <h2>Príroda</h2>
            <nav>
                <a href="portfolio.php">Späť na výber tém</a>
                <a href="portfolioKvety.php">Ďalšia téma</a>
            </nav>
        </div>
    </section>

    <section class="galeria">
        <div class="pole">
            
            <article class="polozka">
                <img src="images/priroda1.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda2.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda3.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda4.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda5.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda6.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda7.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda8.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda9.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda10.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda11.jpg"
                    alt="prirodaIMG">
            </article>
            <article class="polozka">
                <img src="images/priroda12.jpg"
                    alt="prirodaIMG">
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