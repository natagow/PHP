<!-- Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre. -->

    <!DOCTYPE html>
    <html>
      <head>
        <title>Exo 4</title>
      </head>
      <body>
        <form action="" method="get">
          <input type="number" name="age">
          <br>
          <input type="radio" name="sex" value="homme">
          homme
          <input type="radio" name="sex" value="femme">
          femme
          <br>
          Parles-tu anglais ?
          <input type="radio" name="lang" value="oui">
          oui
          <input type="radio" name="lang" value="non">
          non
        </form>
          <?php
            $lang = $_GET["lang"];
            $age = $_GET["age"];
            $sex = $_GET["sex"];
              if ($age < 12) {
                if($lang == "oui"){
                  if($sex == "homme")
                    echo "Hello boy!";
                    else echo "Hello Girl!";
              } else {
                if($lang == "homme")
                    echo "Salut petit!";
                    else echo "Salut petite!";
                  }
        }
                elseif ($age >= 12 and $age <= 18) {
                    if($lang == "oui"){
                    if($sex == "homme")
                    echo "Hello Teenage boy!";
                    else echo "Hello Teenage girl!";
              } else {
                if($sex == "homme")
                echo "Salut l'adolescent!";
                else echo "Salut l'adolescente!";
                  }
        }
                elseif ($age > 18 and $age <= 115) {
                    if($lang == "oui"){
                    if($sex == "homme") echo "Hello Sir!";
                    else echo "Hello Lady!";
              } else {
                if($sex == "homme")
                echo "Salut l'adulte!";
                else echo "Salut l'adulte!";
                  }
        }
                elseif ($age > 115) {
                    if($lang == "oui"){
                    if($sex == "homme")
                    echo "Wow! Still alive, old man?";
                    else echo "Wow! Still alive, old lady?";
              } else {
                if($sex == "homme")
                echo "Wow! Toujours vivant?";
                else echo "Wow! Toujours vivante?";
                  }
        }
        ?>
      </body>
    </html>
