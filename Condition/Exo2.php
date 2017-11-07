<!-- Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
Méthode: GET Affiche un message différent selon la réponse au formulaire.

    Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?" -->


    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <form action="Exo2.php" method="get">
          Quel est ton âge ?:<br>
            <input type="text" name="age" value="">
            <br>
          <input type="submit" value="Submit">
          </form>
            <?php
              $age = $_GET["age"];
              if ($age > 0 and $age < 12) {
                echo "Salut la mioche";
              } elseif ($age >= 12 and $age < 18) {
                echo "Salut le boutonneux";
              } elseif ($age >= 18 and $age < 115) {
                echo "Salut le taxé";
              } elseif ($age >= 115) {
                echo "Salut le décédé !";
              } else {
                echo "Gerard le robot pose cette souris !";
              }
            ?>
      </body>
    </html>
