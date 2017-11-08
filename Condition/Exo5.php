<!-- Crée un petit formulaire qui réagit à la note de l'étudiant.
Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
Si la note est égale à 10, affiche "Tout juste!"
Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
Si la note est 15, 16, 17, ou 18, affiche "Bravo!".
Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!". -->
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
      if ($note > 0 and $note <= 3) {
        echo "Ce travail est nul";
      }
      elseif ($note > 3 and $note <= 6) {
        echo "Apparemment t'aura pas cette note :/";
      }
      elseif ($note > 6 and $note <= 9) {
        echo "Ce travail n'est pas terrible";
      }
      elseif ($note == 10) {
        echo "Tout juste";
      }
      elseif ($note > 10 and $note <= 14) {
        echo "C'est pas mal!";
      }
      elseif ($note > 14 and $note <= 18) {
        echo "Bravo";
      }
      elseif ($note > 19 and $note <= 20) {
        echo "Mytho !";
      }
      else {
        echo "";
      }
      ?>
  </body>
</html>
