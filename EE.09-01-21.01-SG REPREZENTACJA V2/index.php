<?php require('connect.php') ?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>

<body>
    <div id="baner">
        <h2 class="styl">Światowe rozgrywki piłkarskie</h2>
        <img src="boisko.png" alt="boisko">
    </div>

    <div>
        <?php
        $qrr = $conn->prepare("SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'");
        //bindParam
        $qrr->execute();
        $result = $qrr->get_result();
        while ($row = $result->fetch_assoc()) {
            echo "<div class=\"match\">";
            $z1 = $row['zespol1'];
            $z2 = $row['zespol2'];
            $w = $row['wynik'];
            $data = $row['data_rozgrywki'];
            echo "<h3>$z1 - $z2</h3>";
            echo "<h4>$w</h4>";
            echo "<p>w dniu: $data</p>";
            echo "</div>";
        }

        ?>
    </div>

    <div id="main">

    </div>

    <div id="left">
        <h2>Reprezentacja Polski</h2>
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy)
        <p>
        <form method="post" action="index.php">
            <input type="number" name="pozycja">
            <button type="submit">Sprawdź</button>
            <ul>
                <?php
                if (isset($_REQUEST['pozycja']) && $_REQUEST['pozycja'] != "") {
                    $qrr = $conn->prepare("SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = ?");
                    $qrr->bind_param("i", $_REQUEST['pozycja']);
                    $qrr->execute();
                    $result = $qrr->get_result();
                    while ($row = $result->fetch_assoc()) {
                        $i = $row['imie'];
                        $n = $row['nazwisko'];
                        echo "<li>$i $n</li>";
                    }
                    mysqli_close($conn);
                    header("Location: /index.php");
                    exit();
                }
                ?>
            </ul>
    </div>

    <div id="footer">
        <img src="piłka.png" alt="piłkarz">
        <p>Autor: Jan Kupczyk</p>
    </div>
</body>

</html>












































<!-- Jan Kupczyk -->