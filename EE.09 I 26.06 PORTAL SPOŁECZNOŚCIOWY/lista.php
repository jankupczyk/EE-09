<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Lista przyjaciół</title>
  <link rel="stylesheet" href="styl.css">
</head>

<body>
  <div class="banner">
    <h1>Portal Społecznościowy - moje konto</h1>
  </div>
  <main>

    <h2>Moje zainteresowania</h2>

    <ul>
      <li>muzyka</li>
      <li>film</li>
      <li>komputery</li>
    </ul>

    <h2>Moi znajomi</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dane");

    $sql = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6;";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_row($result)) {
      echo <<<CMT
          <div class='przyjaciele'>
            <div class='imgbox'>
              <img  src='$row[0]' alt='przyjaciel'>
            </div>
            <div class='opis'>
              <h3>$row[1]</h3>
              <p>Ostatni wpis: $row[2]</p>
            </div>
            <div class='linebox'>
              <hr>
            </div>
          </div>
          CMT;
    }

    mysqli_close($conn);
    ?>
  </main>

  <footer>
    <div class="one">
      Stronę wykonał: Jan Kupczyk
    </div>

    <div class="two">
      <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </div>
  </footer>
</body>

</html>