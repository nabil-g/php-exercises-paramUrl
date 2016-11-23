<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>


      <?php
        if (isset($_GET['langage']) && isset($_GET['serveur'])) {
          echo $_GET['langage'] . "<br>" . $_GET['serveur'] . "<br>";
        }



       ?>

       <a href="?langage=PHP&serveur=LAMP">Lien</a>
    </p>
  </body>
</html>
