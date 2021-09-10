<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Warzywniak</title>
	<link rel="stylesheet" type="text/css" href="styl2.css">
</head>

<body>
	<?php
	if (isset($_POST['przeslij'])) {
		$nazwa = $_POST['nazwa'];
		$cena = $_POST['cena'];
		$conn = mysqli_connect('localhost', 'root', '', 'dane2');
		$sql = "INSERT INTO produkty (id,`Rodzaje_id`,`Producenci_id`,`nazwa`,`ilosc`,`opis`,`cena`,`zdjecie`) VALUES (NULL,'1','4','$nazwa','10','','$cena','owoce.jpg')";

		mysqli_query($conn, $sql);
		$result = $conn->query($sql);
	}
	?>
	<header id="lewy">
		<h1> Internetowy sklep z eko-warzywami</h1>
	</header>
	<header id="prawy">
		<ol>
			<li> warzywa </li>
			<li> owoce </li>
			<li> <a href="" target="_blank"> soki </a></li>
		</ol>
	</header>
	<main>
		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'dane2');
		$result = mysqli_query($conn, "SELECT nazwa,ilosc,opis,cena,zdjecie from produkty where Rodzaje_id=1 or Rodzaje_id=2");
		while ($w = mysqli_fetch_row($result)) {
			echo '<div id="produkt">';
			echo '<img src="' . $w[4] . '" alt="warzywniak">';
			echo '<h5>' . $w[0] . '</h5>';
			echo '<p>opis: ' . $w[2] . '</p>';
			echo '<p>na stanie: ' . $w[1] . '</p>';
			echo '<h2>' . $w[3] . 'zł';
			echo '</div>';
		}
		mysqli_close($conn);
		?>
	</main>
	<footer>
		<form method="post">
			Nazwa: <input type="text" name="nazwa" id="nazwa">
			Cena: <input type="text" name="cena" id="cena">
			<input type="submit" name="przeslij" id="przeslij" value="Dodaj produkt">
		</form>

		<p>Stronę wykonał: Jan Kupczyk</p>
	</footer>
</body>

</html>