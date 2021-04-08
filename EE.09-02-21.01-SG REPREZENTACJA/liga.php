<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <div class="baner">
        <h3>Reprezentacja Polski W Piłce Nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </div>


    <main>
        <div class="lewy">
            <form action="liga.php" method="POST">
                <select name="lista" id="">
                    <option value="1" selected>Bramkarze</option>
                    <option value="2">Obrońcy</option>
                    <option value="3">Pomocnicy</option>
                    <option value="4">Napastnicy</option>
                </select>

                <button type="submit" name="zobacz">ZOBACZ</button>

            </form>

            <img src="zad2.png" alt="piłka">
            <br><br>
            <p>Autor: Jan Kupczyk 4TID</p>
        </div>
        <div class="prawy">


            <ol>
                <?php
                if (isset($_POST['zobacz'])) {
                    $conn = mysqli_connect(
                        'localhost',
                        'root',
                        '',
                        'egzamin'
                    );

                    $numer = $_POST['lista'];
                    $qr = "SELECT imie, nazwisko from zawodnik WHERE pozycja_id = $numer";
                    $result = $conn->query($qr);
                    while ($wiersz = mysqli_fetch_assoc($result)) {
                        $imie = $wiersz['imie'];
                        $nazwisko = $wiersz['nazwisko'];
                        echo "<br><li> $imie&nbsp;$nazwisko </li>";
                    }
                    $result = $conn->query($qr);
                }
                ?>
            </ol>

        </div>

    </main>

    <h3>Liga Mistrzów</h3>

    <div class="TeamContainer-wrapper">
        <?php
        require("connect.php");

        $qr = "SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC";
        $result = $conn->query($qr);
        while ($row = $result->fetch_assoc()) {
            $zespol = $row['zespol'];
            $punkty = $row['punkty'];
            $grupa = $row['grupa'];

            echo '<div class="TeamContainer">';
            echo "<br><h2>$zespol</h2>";
            echo "<h1><br>$punkty<br><br></h1>";
            echo "<p>Grupa: $grupa</p><br>";
            echo '</div>';
        }
        mysqli_close($conn)

        ?>
    </div>

</body>

</html>
























































<!-- Jan Kupczyk 4TID -->