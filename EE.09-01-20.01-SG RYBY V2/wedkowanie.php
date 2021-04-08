<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Klub wędkowania</title>
        <link rel="stylesheet" href="styl2.css">
    </head>

    <body>
        <header>
            <h2>Wędkuj z nami!</h2>
        </header>

        <section class="lewy">
            <img src="ryba2.jpg" alt="Szczupak">
        </section>

        <section class="prawy">
            <h3>Ryby spokojnego żeru(białe)</h3>
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'egzamin_2020_01_01');

                $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";

                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)){
                    echo '<p>'.$row[0].'. '.$row[1].', występuje w: '.$row[2].'</p>';
                }

                mysqli_close($conn)
            ?>
            <ol>
                <li>
                    <a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a>
                </li>

                <li>
                    <a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski”</a>
                </li>
            </ol>
        </section>

        <footer>
            <p>Stronę wykonał: Jan Kupczyk 4TID</p>
        </footer> 
    </body>
</html>