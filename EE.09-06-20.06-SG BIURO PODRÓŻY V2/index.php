<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="containter">
        <div class="banner">
            <h1>WITAMY W BIURZE PODRÓŻY</h1>
        </div>
        <div class="main">
            <h3>ARCHIWUM WYCIECZEK</h3>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "wycieczki2");
            $qrr = "SELECT `id`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = 0;";
            $res = mysqli_query($conn, $qrr);

            while ($row = mysqli_fetch_row($res)) {
                echo "$row[0]. $row[1], cena: $row[2]<br/>";
            }
            ?>
        </div>

        <div>
            <div class="left">
                <h3>NAJTANIEJ...</h3>
                <table>
                    <tr>
                        <td>Włochy</td>
                        <td>od 1200 zł</td>
                    </tr>
                    <tr>
                        <td>Francja</td>
                        <td>od 1200 zł</td>
                    </tr>
                    <tr>
                        <td>Hiszpania</td>
                        <td>od 1400 zł</td>
                    </tr>
                </table>
            </div>
            <div class="center">
                <h3>TU BYLIŚMY</h3>
                <?php

                $qrr2 = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `podpis` DESC;";
                $res = mysqli_query($conn, $qrr2);

                while ($row = mysqli_fetch_row($res)) {
                    echo "<img src='$row[0]' alt='$row[1]'>";
                }

                mysqli_close($conn);

                ?>
            </div>
            <div class="right">
                <h3>SKONTAKTUJ SIĘ</h3>
                <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
                <p>telefon: 555666777</p>
            </div>
        </div>

        <div class="footer">
            <p>Stronę wykonał: Jan Kupczyk 4TID</p>
        </div>
    </div>

</body>

</html>
































<!-- Jan Kupczyk -->