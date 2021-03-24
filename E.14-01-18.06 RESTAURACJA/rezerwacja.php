<?php

require("poloczenie.php");

$data = $_POST['data'];
$ile = $_POST['ile'];
$numer = $_POST['numer'];


$qr = "INSERT INTO rezerwacje(id, nr_stolika, data_rez, liczba_osob, telefon) VALUES ('','','$data','$ile','$numer')";
$result = $conn->query($qr);

echo "<h1>Dodano rezerwację do bazy!</h1>";
echo "<p>Zamówienie w dniu <strong>$data</strong> na <strong>$ile</strong> osób, telefon kontaktowy to <strong>$numer</strong></p>";

if( empty($_POST["ToU"]) ) { echo "<strong>Nie wyraziłeś/aś zgody na przetwarzanie danych osobowych ✘</strong>"; }
else { echo "<strong>Wyraziłeś/aś zgodę na przetwarzanie danych osobowych ✓</strong>"; }

mysqli_close($conn)
?>

<!-- Jan Kupczyk 4TID -->