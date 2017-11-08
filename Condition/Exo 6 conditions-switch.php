<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 5</title>
  </head>
  <body>
    <form action="Exo5.php" method="get">
      <br>
      Combien as-tu eu ?
      <input type="number" name="note">
    </form>
    <?php
    $note = $_GET["note"];
    switch ($note) {
      case 1:
        echo "Ce travail est nul.";
        break;
      case 2:
        echo "Ce travail est nul.";
        break;
      case 3:
        echo "Ce travail est nul.";
        break;
      case 6:
        echo "Ce travail n'est pas terrible.";
        break;
      case 7:
        echo "Ce travail n'est pas terrible.";
        break;
      case 8:
        echo "Ce travail n'est pas terrible.";
        break;
      case 9:
        echo "Ce travail n'est pas terrible.";
        break;
      case 10:
        echo "Tout juste!";
        break;
      case 11:
        echo "C'est pas mal.";
        break;
      case 12:
        echo "C'est pas mal.";
        break;
      case 13:
        echo "C'est pas mal.";
        break;
      case 14:
        echo "C'est pas mal.";
        break;
      case 15:
        echo "Bravo!";
        break;
      case 16:
        echo "Bravo!";
        break;
      case 17:
        echo "Bravo!";
        break;
      case 18:
        echo "Bravo!";
        break;
      case 19:
        echo "Police! Arrêtez ce tricheur!";
        break;
      case 20:
        echo "Police! Arrêtez ce tricheur!";
        break;
      }
      ?>
  </body>
</html>
