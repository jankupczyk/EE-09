<?php
$qr = "INSERT INTO zgloszenia VALUES (null,$zespol,$dyspozytor,$adres,0,CURRENT_TIME()";
$result = $conn->query($qr);

while ($row = $result->fetch_assoc()) {
    $zespol = $_POST["zespol"];
    $dyspozytor = $_POST["dyspozytor"];
    $adres = $_POST["adres"] . '"';
}

mysqli_close($conn);
header("Location: /index.php");
exit();
?>