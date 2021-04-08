<?php $connect=mysqli_connect('localhost','root','','baza') or die('błąd połączenia') ?>
<html>
<head>
	<meta charset='utf-8'>
	<title>Gromady kręgowców</title>
	<link rel='Stylesheet' href='style12.css'>
</head>
<body>
	<div id='menu'>
		<a href='gromada-ryby.html'>gromada ryb</a>
		<a href='gromada-ptaki.html'>gromada ptaków</a>
		<a href='gromada-ssaki.html'>gromada ssaków</a>
	</div>
	<div id='logo'>
		<h2>GROMADY KRĘGOWCÓW</h2>
	</div>
	<div id='lewy'>
		<?php
		$lista=mysqli_query($connect,'SELECT zwierzeta.id,Gromady_id,gatunek,wystepowanie,nazwa from zwierzeta,gromady where (Gromady_id=4 or Gromady_id=5) and Gromady_id=gromady.id');
		while($data = mysqli_fetch_assoc($lista)){
			echo $data['id'].'. '.$data['gatunek'].'</br></br>'.'Występowanie: '.$data['wystepowanie'].', gromada '.$data['nazwa'].'<hr>';};
		
		?>
	</div>
	<div id='prawy'>
		<h1>PTAKI</h1>
		<?php
		$ptaki=mysqli_query($connect,'SELECT gatunek, obraz from zwierzeta where Gromady_id=4');
		echo'<ol>';
		while($data = mysqli_fetch_assoc($ptaki)){
			echo '<li><a href='.$data['obraz'].'>'.$data['gatunek'].'</a></li>';};
		echo'</ol>';
		?>
		<img src='sroka.jpg' alt='Sroka zwyczajna, gromada ptaki'>
	</div>
	<div id='stopka'>Stronę o kręgowcach przygotował: Jan Kupczyk 4TID</div>
</body>
</html>