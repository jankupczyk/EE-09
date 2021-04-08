<?php
    $connect = mysqli_connect('localhost','root','','egzamin_2020_06_01') or die ('błąd połączenia');
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Organizer</title>
		<link rel="stylesheet" href="./style6.css">
	</head>

	<body>
		<div class="baner">
			<h2>MÓJ ORGANIZER</h2>
		</div>

		<div class="baner">
			<form action="" method="POST">
				<label for="wydarzenie">Wpis wydarzenia:</label>
				<input type="text" id="wydarzenie" name="wydarzenie" />
                <input type="submit" name="submit" value="ZAPISZ" />
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    $wydarzenie = $_POST['wydarzenie'];

                    mysqli_query($connect, "UPDATE zadania SET zadania.wpis = '$wydarzenie' WHERE dataZadania = '2020-08-27'");
                };
            ?>
        </div>

		<div class="baner">
			<img src="./logo2.png" alt="Mój organizer" />
		</div>

		<div class="glowny">
			<?php
                $query = mysqli_query($connect,"SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien'");

                while($row = mysqli_fetch_assoc($query)) {
                    echo "<div class='dzien'><h6>".$row['dataZadania'].", ".$row['miesiac']."</h6><p>".$row['wpis']."</p></div>";
                };
            ?>
		</div>

		<div class="stopka">
			<?php
                $query2 = mysqli_query($connect, "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01'");

                $row2 = mysqli_fetch_assoc($query2);

                echo "<h1>miesiąc: ".$row2['miesiac'].", rok: ".$row2['rok']."</h1>";

                mysqli_close($connect);
            ?>
			<p>Stronę wykonał: Jan Kupczyk 4TID</p>
		</div>
	</body>
</html>
