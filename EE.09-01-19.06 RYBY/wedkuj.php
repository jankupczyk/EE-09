<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="style_1.css">
</head>

<body>
    <header class="Portalwed">
        <h2>Portal&nbsp;dla&nbsp;wędkarzy&nbsp;</h2>
    </header>
    <main>
        <article>
            <h1>Ryby drapieżne naszych wód</h1>
        </article>
        <section>
            <p>
                <img src="ryba.jpg" alt="Sum" style="border: solid 1px #000080; padding: 5px; margin: 10px;">
            </p>

            <p><a href="kwerendy.txt" style="text-decoration: none;">Pobierz kwerendy</a>
            </p>

            <?php
            $conn = new mysqli('localhost', 'root', '', 'bazaryby');
            $sql = "SELECT nazwa, wystepowanie FROM 'ryby' WHERE styl_zycia = 1 ";
            $wynik = $db->query($sql);
            while ($wiersz = $wynik->fetch_assoc()) {
                $nazwa = $wiersz['nazwa'];
                $wystepowanie = $wiersz['wystepowanie'];
                echo "<li>$nazwa, wystepowanie: $wystepowanie </li>";
            }

            ?>  

        </section>


    </main>





    <footer id="jk">
        <center>
            <h4>Stronę&nbsp;wykonał:&nbsp;JAN&nbsp;KUPCZYK &nbsp;4&nbsp;TID</h4>
        </center>
    </footer>

</body>

</html>