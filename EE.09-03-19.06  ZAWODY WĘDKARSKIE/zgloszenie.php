<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $lowisko = $_POST["lowisko"];
    $data = $_POST['data'];
    $sedzia = $_POST['sedzia'];

    $db = new mysqli('localhost', 'root', '', 'wedkarstwo');
    $sql = "INSERT INTO `zawody_wedkarskie` (`id`, `Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (NULL, '2', '$lowisko', '$data', '$sedzia')";
    $db->query($sql);
    $db->close();
    ?>


</body>

</html>