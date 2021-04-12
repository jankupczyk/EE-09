<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<title>Prognoza pogody Poznań</title>
	<link rel="stylesheet" href="styl4.css">
</head>
<body>
	<header>
		<section id="hedL">
			<p>maj, 2019 r.</p>
		</section>
		<section id="hedS">
			<h2>Prognoza dla Poznania</h2>
		</section>
		<section id="hedP">
			<img src="logo.png" alt="prognoza">
		</section>	
	</header>
	<main>
		<section id="lewy">
			<a href="kwerendy.txt" download>Kwerendy</a>
		</section>
		<section id="prawy">
			<img src="obraz.jpg" alt="Polska, Poznań">
		</section>
	</main>
	<article>
		<table>
			<tr>
				<th>Lp.</th>
				<th>DATA</th>
				<th>NOC - TEMPERATURA</th>
				<th>DZIEŃ - TEMPERATURA</th>
				<th>OPADY [mm/h]</th>
				<th>CIŚNIENIE [hPa]</th>
			</tr>
			<?php
				$mysqliCon = @mysqli_connect("localhost", "root", "", "prognoza");
				$sql = "SELECT * FROM pogoda WHERE miasta_id=2 ORDER BY data_prognozy DESC";
				$result = mysqli_query($mysqliCon, $sql);
				while ($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["data_prognozy"]."</td>";
					echo "<td>".$row["temperatura_noc"]."</td>";
					echo "<td>".$row["temperatura_dzien"]."</td>";
					echo "<td>".$row["opady"]."</td>";
					echo "<td>".$row["cisnienie"]."</td>";
					echo "</tr>";
				}
				mysqli_close($mysqliCon);
			?>
		</table>
	</article>
	<footer>
		<p>Stronę wykonał: Jan Kupczyk 4TID</p>
	</footer>
</body>
</html>