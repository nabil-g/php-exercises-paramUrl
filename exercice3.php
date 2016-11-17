<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>


      <?php
        if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
          echo $_GET['dateDebut'] . "<br>" . $_GET['dateFin'];
        }



       ?>
       <br>
       <a href="?dateDebut=2/05/2016&dateFin=27/11/2016">Lien</a>
    </p>
  </body>
</html>
