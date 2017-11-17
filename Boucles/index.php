 <?php
// foreach( $assiettes as $assiette){
// 	trempe($assiette);
// 	frotte($assiette);
// 	mets_a_secher($assiette);
// }
// foreach ($names as $n){
// 	echo ucfirst($n);
// }
// foreach ($names as $index => $n){
// 	echo "Prénom numéro $index : ";
// 	echo ucfirst($n);
// }

    // $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Ils/Elles');
    // echo '<pre>';
    // foreach ($pronoms_personnels as $element)
    // {
    //   echo $element . '<br/>';
    // }
    // echo '</pre>';
    // echo '<pre>';
    // foreach ($pronoms_personnels as $element)
    // {
    //   echo $element; // On affiche à chaque tour de boucle le pronom
    //   echo ' '; // On affiche ensuite un espace vide qui se placera entre le pronom et le verbe conjuguer
    //   //On fait une boucle switch pour déterminer la forme du verbe conjugué à affiché en fonction du pronom à chaque tour de boucle
    //   switch ($element)
    //   {
    //     case 'Je':
    //         echo "code". "<br/>";
    //         break;
    //     case 'Tu':
    //         echo "codes". "<br/>";
    //         break;
    //     case 'Il/Elle':
    //         echo "code". "<br/>";
    //         break;
    //     case 'Nous':
    //         echo "codons". "<br/>";
    //         break;
    //     case 'Vous':
    //         echo "codez". "<br/>";
    //         break;
    //     case 'Ils/Elles':
    //         echo "codent". "<br/>";
    //         break;
    //   }
    // }
    // echo '</pre>';
  ?>


<?php
// $nombre_de_lignes = 1;
//
// while ($nombre_de_lignes <= 100)
// {
//     echo $nombre_de_lignes . ": Je ne dois pas regarder les mouches voler quand j'apprends le PHP <br />";
//     $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
// }
?>


<?php
//  for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
// {
//     echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
// }
?>


<!-- Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while -->



<?php
// $numero = 1;
//
// while ($numero <= 120) {
//   echo $numero, "<br>";
//   $numero++;
// }

 ?>

<!-- Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  for -->

<?php
// for ($numero = 1; $numero <= 120; $numero++)
// {
//     echo  $numero . '<br />';
// }
 ?>

<!-- Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle. -->

<?php
$prenom = array ('Steve' , 'nicolas' , 'nicolas' , 'ilias');
$taille_tableau = count($prenom);

for ($i = 0; $i <= $taille_tableau; $i++) {
  echo $prenom . '<br />';
}

 ?>


 <!-- Crée un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.
A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: la clef est le code ISO du pays, la valeur étant le nom du pays: par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');. Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html. -->
