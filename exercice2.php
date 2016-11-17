<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>


      <?php
        if (isset($_GET['age'])) {
          echo $_GET['age'] . "<br>";
        }
        else{
          echo "Il n'y a pas de paramètre d'age.";
        }


       ?>
       <br>
       <a href="?nom=Nemare&prenom=Jean">Lien</a>
    </p>
  </body>
</html>
