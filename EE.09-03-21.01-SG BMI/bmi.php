<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <?php
    $db = new mysqli('localhost', 'root', '', 'egzamin');
    ?>
    <div id="naglowek">
        <div id="logo">
            <img src="wzor.png" alt="wzór BMI">
        </div>
        <div id="baner">
            <h1>Oblicz swoje BMI</h1>
        </div>
    </div>
    <div id="glowny">
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <?php
                $query = $db->prepare("SELECT informacja, wart_min, wart_max FROM bmi");
                $query->execute();
                $result = $query->get_result();
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>'.$row['informacja'].'</td>';
                    echo '<td>'.$row['wart_min'].'</td>';
                    echo '<td>'.$row['wart_max'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
    <div id="podzial">
        <div id="lewy">
            <h2>Podaj wagę i wzrost</h2>
            <form action="bmi.php" method="post">
                Waga:<input type="number" min="1" name="waga"><br>
                Wzrost w cm:<input type="number" min="1" name="wzrost"><br>
                <button type="submit">Oblicz i zapamietaj wynik</button><br>
                <?php
                if(isset($_POST['waga']) && isset($_POST['wzrost'])) {
                    $waga = $_POST['waga'];
                    $wzrost = $_POST['wzrost'];
                    $bmi = $waga / ($wzrost * $wzrost);
                    $bmi *= 10000;
                    echo "Twoja waga: $waga; Twój wzrost: $wzrost <br> BMI wynosi: $bmi";
                    $bmi_id = 0;
                    if($bmi <= 18) $bmi_id = 1;
                    if($bmi > 19 && $bmi <= 25) $bmi_id = 2;
                    if($bmi > 26 && $bmi <= 30) $bmi_id = 3;
                    if($bmi > 31 && $bmi <= 100) $bmi_id = 4;

                    $dataPomiaru = date("Y-m-d");

                    $query = $db->prepare("INSERT INTO wynik (id, bmi_id, data_pomiaru, wynik) 
                                            VALUES (NULL, ?, ?, ?)");
                    $query->bind_param("isi", $bmi_id, $dataPomiaru, $bmi);
                    $query->execute();
                }

                ?>
            </form>
        </div>
        <div id="prawy"><img src="rys1.png" alt="ćwiczenia"></div>
    </div>
    <div id="stopka">
        Autor: Jan Kupczyk <a href="kwerendy.txt">Zobacz kwerendy</a>
    </div>
    <?php $db->close(); ?>
</body>

</html>


<!-- Jan Kupczyk -->