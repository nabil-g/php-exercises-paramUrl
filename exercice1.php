<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>


      <?php
        if (isset($_GET['nom']) && isset($_GET['prenom'])) {
          echo $_GET['nom'] . "<br>" . $_GET['prenom'];
        }


       ?>
       <br>
       <a href="?nom=Nemare&prenom=Jean">Lien</a>
    </p>
  </body>
</html>
