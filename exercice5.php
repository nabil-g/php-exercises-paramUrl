<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>


      <?php
        if (isset($_GET['semaine'])) {
          echo $_GET['semaine'] . "<br>";
        }



       ?>

       <a href="?semaine=12">Lien</a>
    </p>
  </body>
</html>
