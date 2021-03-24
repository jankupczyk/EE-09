<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <div class="gorny"><img src="klaps.png" alt="Nasze filmy"></div>
    <div class="gorny">
        <h1>Baza filmów</h1>
    </div>
    <div class="gorny">
        <form action="" method="POST">
            <select name="lista" id="">
                <option value="1">Sci-FI</option>
                <option value="2">Animacja</option>
                <option value="3">Dramat</option>
                <option value="4">Horror</option>
                <option value="5">Komedia</option>
            </select>
            <button type="submit" name="filmy">Filmy</button>
        </form>
    </div>
    <div class="gorny"><img src="gwiezdneWojny.jpg" alt="Szturmowcy"></div>

    <div class="glownylewy">
        <h2>Wybrano filmy</h2>
        <?php
        if (isset($_POST['filmy'])) {
            $conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'filmy'
            );

            $gatunek = $_POST['lista'];
            $qr = "SELECT tytul, rok, ocena FROM `filmy` WHERE gatunki_id = $gatunek";
            while ($wiersz = mysqli_fetch_assoc($result)) {
                $tytul = $wiersz['tytul'];
                $rok = $wiersz['rok'];
                $ocena = $wiersz['ocena'];
                echo "<p>Tytuł: $tytul, Rok produkcji: $rok, Ocena: $ocena</p>";
            }
            $result = $conn->query($qr);
        }
        ?>



    </div>

    <div class="glownyprawy">
        <h3>Wszystkie Filmy</h3>

        <?php
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'filmy'
        );

        $qr = "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko from filmy, rezyserzy where rezyserzy.id=filmy.rezyserzy_id;";

        while ($wiersz = mysqli_fetch_assoc($result)) {
            $id = $wiersz['id'];
            $tytul = $wiersz['tytul'];
            $imie = $wiersz['imie'];
            $nazwisko = $wiersz['nazwisko'];
            echo "<p>$id. $tytul, reżyseria: $imie.$nazwisko</p>";
        }
        $result = $conn->query($qr);
        ?>


    </div>





    <footer class="stopka">
        <p>Autor: Jan Kupczyk 4TID</p>
        <a href="kwerendy.txt">Zapytania do bazy</a>
        <a href="http://filmy.pl" target="_blank">Przejdź do fiilmy.pl</a>

    </footer>

</body>

</html>