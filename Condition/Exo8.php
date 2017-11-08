
<!DOCTYPE html>
<html>
  <head>
    <title>Exo 7 </title>
  </head>
  <body>
    <form action="" method="get">
      <input type="number" name="age">
      <input type="radio" name="sex" value="homme">
      homme
      <input type="radio" name="sex" value="femme">
      femme
    </form>

<?php
    $age = $_GET["age"];
    $sex = $_GET["sex"];
      if ($age >= 21 and $age <= 40) {
        if($sex == "femme")
        echo "Bonjour, bienvenue parmi nous!";
        else echo "Désolé, vous ne remplissez pas les critères de sélection.";
      }

      ?>
  </body>
</html>
