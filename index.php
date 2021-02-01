
<?php include __DIR__ . "/database.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hotel snack 5</title>
  </head>
  <body>
    <!-- Stampare tutti i nostri hotel con
      tutti i dati disponibili.
      Avremo un file PHP con il nostro “database”
      e un file con tutta la logica. -->

    <ul>
      <?php foreach ($hotels as $hotel) { ?>
        <li>
          <h2><?= $hotel["name"]; ?> </h2>
          <p>description: <?= $hotel["description"]; ?> </p>
          <p>parcheggio: <?php echo $hotel ["parking"] ? 'SI' : 'NO';  ?> </p>
          <p> voto: <?= $hotel["vote"]; ?> /5</p>
          <p> distanza dal centro: <?= $hotel["distance _to_center"]; ?> </p>
        </li>
      <?php } ?>
    </ul>
  </body>
</html>
