<?php
$conn = mysqli_connect('localhost', 'root', '', 'egzazminkom');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style.css">

	<title>Komis Samochodowy</title>

</head>

<body>
	<div class="main">
		<div class="baner">
			<h1>SAMOCHODY</h1>
		</div>
		<div class="wykaz">
			<h2>Wykaz samochodów</h2>
			<?php
			$qrr = "SELECT id, marka,model FROM samochody";
			$re = mysqli_query($conn, $qrr);
			while ($row = mysqli_fetch_assoc($res)) {
				echo '<li>' . $row['id'] . ' ' . $row['marka'] . ' ' . $row['model'] . '</li>';
			}
			mysqli_close($conn);
			?>
			<h2>Zamówienia</h2>
			<?php
			$qrr2 = "SELECT Samochody_id, Klient FROM zamowienia";
			$res2 = mysqli_query($conn, $qrr2);
			while ($row = mysqli_fetch_assoc($res2)) {
				echo '<li>' . $row['Samochody_id'] . ' ' . $row['Klient'] . ' ' . '		</li>';
			}
			mysqli_close($conn);
			?>
		</div>
		<div class="fiat">
			<h2>Pełne dane: Fiat</h2>
			<?php
			$qrr3 = "SELECT id, marka, model, rocznik, kolor, stan FROM samochody WHERE marka LIKE 'Fiat'";
			$res3 = mysqli_query($conn, $qrr3);
			while ($row = mysqli_fetch_assoc($res3)) {
				echo $row['id'] . ' / ' . $row['marka'] . ' / ' . $row['model'] . ' / ' . $row['rocznik'] . ' / ' . $row['kolor'] . ' / ' . $row['stan'] . '</br>';
			}
			mysqli_close($conn);
			?>
		</div>
		<section>
			<table>
				<tr>
					<th><a href="kwerendy.txt">Kwerendy</a></th>
					<th>Autor: Jan Kupczyk</th>
					<th><img src="auto.png" alt="samochód"></th>
				</tr>
			</table>
		</section>
	</div>

</body>

</html>





































<!-- Jan Kupczyk -->