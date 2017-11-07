<!-- Complète le formulaire de l'exercice précédent en ajoutant une deuxième question : "Homme ou Femme?" (champ de type Radio). Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions. -->

<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <form action="Exo3.php" method="get">
          Quel est ton âge ?:<br>
          <input type="text" name="age">
            <br>
          <input type="submit" value="Submit">
            <br>
          Femme
            <input type="radio" name="sex" value="Femme">
          Homme
          <input type="radio" name="sex" value="Homme">
        </form>

            <?php
              $age = $_GET["age"];

              $sex = $_GET["sex"];

                if ($age > 0 and $age < 12) {
                  if ($sex == "Femme") {
                    echo "Salut la mioche";
                  }
                  else {
                    echo "Salut le mioche"; }
                  }

            elseif ($age >= 12 and $age < 18) {
                  if ($sex == "Femme") {
                    echo "Bonjour Mademoiselle ! un 06 ?";
                  }
                  else {
                    echo "Bien ou bien ?";
                  }
              }
              elseif ($age >= 18 and $age < 115) {
                  if ($sex == "Femme") {
                    echo "Bonjour madame, vous voudriez vous un carambar";
                  }
                  else {
                    echo "Bonjour monsieur, voici vos impots";
                  }
              }
              elseif ($age >= 115) {
                  if ($age == "Femme") {
                    echo "Vivante ? eh bé";
                  }
                  else {
                    echo "Nan toi t'es déjà mort c'est sur..";
                  }
              }

            ?>
      </body>
    </html>
