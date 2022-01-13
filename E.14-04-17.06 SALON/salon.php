<?php $conn = mysqli_connect('localhost', 'root', '', 'salon'); ?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Salon pielęgnacji</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
	</header>
	<nav>
		<h3>SALON ZAPRASZA W DNIACH</h3>
		<ul>
			<li>Poniedziałek, 12:00 - 18:00</li>
			<li>Wtorek, 12:00 - 18:00</li>
		</ul>
		<a href="pies.png"><img src="pies.png"></a>
		<p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
	</nav>
	<main>
		<h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'salon');
		$qrr1 = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`rodzaj`, `zwierzeta`.`nastepna_wizyta`, `zwierzeta`.`telefon` FROM `zwierzeta` WHERE `zwierzeta`.`nastepna_wizyta` != 0";
		$qrr2 = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`rodzaj`, `zwierzeta`.`nastepna_wizyta`, `zwierzeta`.`telefon` FROM `zwierzeta` WHERE `zwierzeta`.`nastepna_wizyta` != 0 AND `zwierzeta`.`rodzaj` = 1";
		$qrr3 = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`rodzaj`, `zwierzeta`.`nastepna_wizyta`, `zwierzeta`.`telefon` FROM `zwierzeta` WHERE `zwierzeta`.`nastepna_wizyta` != 0 AND `zwierzeta`.`rodzaj` = 2";
		$rs1 = mysqli_query($conn, $qrr1);
		$rs2 = mysqli_query($conn, $qrr2);
		$rs3 = mysqli_query($conn, $qrr3);
		while ($row1 = mysqli_fetch_row($rs1)) {
			while ($row2 = mysqli_fetch_row($rs2)) {
				echo 'Pies: ' . $row2[0] . '<br>' . 'Data następnej wizyty: ' . $row2[2] . ', telefon właściciela: ' . $row2[3] . '<br>';
			}
			while ($row3 = mysqli_fetch_row($result3)) {
				echo 'Kot: ' . $row3[0] . '<br>' . 'Data następnej wizyty: ' . $row3[2] . ', telefon właściciela: ' . $row3[3] . '<br>';
			}
		}

		mysqli_close($conn);
		header("Location: /index.php");
		exit();
		?>
	</main>
	<aside>
		<h3>USŁUGI</h3>
		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'salon');
		$qrr4 = "SELECT nazwa, cena FROM `uslugi`";
		$rs5 = mysqli_query($conn, $qrr4);
		while ($row4 = mysqli_fetch_row($rs5)) {
			echo $row4[0] . ', ' . $row4[1] . '<br>';
		}

		mysqli_close($conn);
		header("Location: /index.php");
		exit();
		?>
	</aside>
</body>

</html>






































<!-- Jan Kupczyk -->