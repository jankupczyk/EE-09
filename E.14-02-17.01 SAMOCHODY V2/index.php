<?php
$conn = mysqli_connect('localhost', 'root', '', 'Komis');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style.css">

	<title>Wynajmujemy samochody</title>
</head>

<body>
	<div class="main">
		<div class="wynajem">
			<h1>Wynajem Samochodów</h1>
		</div>
		<div class="toyota">
			<h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
			<?php
			$qrr = "SELECT id, marka, kolor FROM samochody WHERE marka LIKE 'Toyota' AND  rocznik = 2014";
			$res = mysqli_query($conn, $qrr);
			while ($row = mysqli_fetch_assoc($res)) {
				echo '<ol>' . $row['id'] . ' ' . $row['marka'] . ' ' . $row['kolor'] . '</ol>';
			}
			mysqli_close($conn);
			?>
			<h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
			<?php
			$qrr2 = "SELECT id, marka, model, rocznik FROM samochody";
			$res2 = mysqli_query($conn, $qrr2);
			while ($row = mysqli_fetch_assoc($res2)) {
				echo '<ol>' . $row['id'] . ' ' . $row['marka'] . ' ' . $row['model'] . ' ' . $row['rocznik'] . ' ' . '		</ol>';
			}
			mysqli_close($conn);
			?>
		</div>
		<div class="tele">
			<h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
			<?php
			$qrr3 = "SELECT samochody.id, samochody.model, zamowienia.telefon FROM zamowienia, samochody WHERE samochody.id= zamowienia.id";
			$res3 = mysqli_query($conn, $qrr3);
			while ($row = mysqli_fetch_assoc($res3)) {
				echo '<ol>' . $row['id'] . ' ' . $row['model'] . ' ' . $row['telefon'] . ' ' . '</ol>';
			}
			mysqli_close($conn);
			?>
		</div>

		<div class="ogloszenia">
			<h2>NASZA OFERTA</h2>
			<li>Fiat</li>
			<li>Toyota</li>
			<li>Opel</li>
			<li>Mercedes</li>
			<p>Tu pobierzesz naszą <a href="/Komis.sql">bazę danych </a></p>
			<p>Autor stron: Jan Kupczyk</p>
		</div>

	</div>

</body>

</html>































































<!-- Jan Kupczyk -->