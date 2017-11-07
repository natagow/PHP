<!-- Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre. -->



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
          Parles-tu anglais ?
          <input type="radio" name="langue" value="yes">
        </form>

            <?php
              $age = $_GET["age"];

              $sex = $_GET["sex"];

              $lan = $_GET["langue"]

                if ($age > 0 and $age < 12) {
                  if ($lan == true and $sex == "Femme") {
                      echo "Hello girly";
                  } else {
                      echo "Hello manly";
                    }
                    if ($sex == "Femme") {
                      echo "Salut la mioche";
                  }
                    else {
                      echo "Salut le mioche"; }
                  }
                

            // elseif ($age >= 12 and $age < 18) {
            //       if ($sex == "Femme") {
            //         echo "Bonjour Mademoiselle ! un 06 ?";
            //       }
            //       else {
            //         echo "Bien ou bien ?";
            //       }
            //   }
            //   elseif ($age >= 18 and $age < 115) {
            //       if ($sex == "Femme") {
            //         echo "Bonjour madame, vous voudriez vous un carambar";
            //       }
            //       else {
            //         echo "Bonjour monsieur, voici vos impots";
            //       }
            //   }
            //   elseif ($age >= 115) {
            //       if ($age == "Femme") {
            //         echo "Vivante ? eh bé";
            //       }
            //       else {
            //         echo "Nan toi t'es déjà mort c'est sur..";
            //       }
            //   }
            //
            // ?>
      </body>
    </html>
