<?php $conn = mysqli_connect('localhost', 'root', '', 'weterynarz'); ?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Weterynarz</title>
		<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<h1>GABINET WETERYNARYJNY</h1>
	</header>
	<nav>
		<h2>PSY</h2>
		<?php
		$qrr1 = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE `rodzaj`= 1";
		$result1 = mysqli_query($conn, $qrr1);
		while ($line1 = mysqli_fetch_row($result1)) {
			echo $line1[0] . ' ' . $line1[1] . ' ' . $line1[2] . '<br>';
		}


		mysqli_close($connect);
		?>
		<h2>KOTY</h2>
		<?php
		$qrr2 = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE `rodzaj`= 2";
		$result2 = mysqli_query($conn, $qrr2);
		while ($line2 = mysqli_fetch_row($result2)) {
			echo $line2[0] . ' ' . $line2[1] . ' ' . $line2[2] . '<br>';
		}


		mysqli_close($conn);
		?>
	</nav>
	<main>
		<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
		<?php
		$qrr3 = "SELECT imie, telefon, szczepienie, opis FROM `zwierzeta`";
		$result3 = mysqli_query($conn, $qrr3);
		while ($line3 = mysqli_fetch_row($result3)) {
			echo "Pacjent: " . $line3[0] . '<br>' . 'Telefon właściciela: ' . $line3[1] . ' ' . ' ostatnie szczepienie: ' . $line3[2] . '<br>' . 'informacje: ' . $line3[3] . '<hr>';
		}


		mysqli_close($conn);
		?>
	</main>
	<aside>
		<h2>WETERYNARZ</h2>
		<a href="logo.png"><img src="logo.png"></a>
		<p>Krzysztof Nowakowski, lekarz weterynarii</p>
		<h2>GODZINY PRZYJĘĆ</h2>
		<table>
			<tr>
				<th>Poniedziałek</th>
				<th>15:00 - 19:00</th>
			</tr>
			<tr>
				<th>Wtorek</th>
				<th>15:00 - 19:00</th>
			</tr>
		</table>
	</aside>
</body>

</html>

















































<!-- Jan Kupczyk -->