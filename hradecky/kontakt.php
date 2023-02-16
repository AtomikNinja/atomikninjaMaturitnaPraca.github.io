<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/kontaktStyle.css">
    <title>Kontakt</title>
</head>
<body>
    
<?php
include_once 'header.php'
?>

    <section class="sekciaInfo">
        <div class="pole">

            <h2>Kontakt</h2>

            <div class="lavyStlpec">
                <ul>
                    <li>Alexander Hradecký</li>
                    <li>Obrancov mieru 878/22</li>
                    <li>962 12, Detva</li>
                    <li>Veľká žlto biela budova</li>
                    <li>2. poschodie</li>
                    <?php
                        if (isset($_SESSION["pouzivatelid"]) == 1) {
                            echo "<li><a class='objednanie' href='admin.php'>Admin</a></li>";
                        }
                        else {
                            echo "<li><a href='https://www.google.com/maps/place/22,+Obrancov+mieru+878,+962+12+Detva/@48.5440217,19.4097583,19z/data=!3m1!4b1!4m6!3m5!1s0x47155ab9af8ea0b1:0x86c27fba40fa50a0!8m2!3d48.5440217!4d19.4103055!16s%2Fg%2F11csh8__4_?hl=sk'>Ukáž kde</a></li>";
                        }
                    ?>
                    

                </ul>
            </div>

            <div class="pravyStlpec">
                <h3>Tu nás nájdete →</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.5788154410034!2d19.408106182415896!3d48.54371154282651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47155ab9af8ea0b1%3A0x86c27fba40fa50a0!2s22%2C%20Obrancov%20mieru%20878%2C%20962%2012%20Detva!5e0!3m2!1sen!2ssk!4v1636476384244!5m2!1sen!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

</body>
</html>