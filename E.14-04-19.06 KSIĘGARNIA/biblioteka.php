<html>
	<head>
		<meta charset='utf-8'>
		<title>Biblioteka publiczna</title>
		<link rel='Stylesheet' href='style.css'>
	</head>
	
	<body>
		<div id='baner'>
			<h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
		</div>
		
		<div id='lewy'>
			<h2>Dodaj czytelnika</h2>
			<form action='biblioteka.php' method='POST'>
				<label>Imię:</label><input type='text' name='imie'></br>
				<label>Nazwisko:</label><input type='text' name='nazwisko'></br>
				<label>Rok urodzenia:</label><input type='number' name='rok'></br>
				<input type='submit' value='DODAJ'>
			</form>
			<?php
				mysqli_set_charset($connect, 'utf-8');
				$imie = $_POST['imie'];
				$nazwisko = $_POST['nazwisko'];
				$rok = $_POST['rok'];
				$kod = $imie{0}.$imie{1}.$rok{2}.$rok{3}.$nazwisko{0}.$nazwisko{1};
				$dodaj=mysqli_query($connect,"INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('$imie','$nazwisko','$kod')");
				echo "czytelnik".' '.$nazwisko.' '."został dodany do bazy danych";
			?>
		</div>
		
		<div id='srodek'>
			<img src='biblioteka.png' alt='biblioteka'>
			<h4>ul. Czytelnicza 25 </br> 12-120 Książkowice </br> tel.: 123123123 </br> e-mail: <a href='mailto:biuro@bib.pl'>biuro@bib.pl</a></h4>
		</div>
		
		<div id='prawy'>
			<h3>Nasi czytelnicy</h3>
			<ul>
			<?php
				$lista=mysqli_query($connect,'select imie,nazwisko from czytelnicy');
				while($data = mysqli_fetch_assoc($lista)){
					echo '<li>'.$data['imie'].' '.$data['nazwisko'].' '.'</li>';
				};
				mysqli_close($connect);
			?>
			</ul>
		</div>
		
		<div id='stopka'><p>Projekt witryny: Jan Kupczyk4TID</p></div>
	</body>
</html>