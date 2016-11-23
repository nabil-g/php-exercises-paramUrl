<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>


      <?php
      if (isset($_GET['batiment']) && isset($_GET['salle'])) {
        echo $_GET['batiment'] . "<br>" . $_GET['salle'] . "<br>";
      }



       ?>

       <a href="?batiment=12&salle=101">Lien</a>
    </p>
  </body>
</html>
