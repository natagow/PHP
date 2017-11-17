<?php
$pronoms_personnels = array( 'je' , 'tu' , 'il' , 'nous' , 'vous' , 'ils' );
  echo $pronoms_personnels[2];
  echo "<br>";

$pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
  echo $pays[2];
  echo "<br>";

$famille = array('Papa' , 'maman' , 'moi');
  print_r($famille);
  echo "<br>";

$plat = array('Cheeseburger' , 'pate pesto' , 'mcdo' , 'pizza' , 'cuisinegwen');
  print_r($plat);
  echo "<br>";

$film = array('matrix' , 'diableprada' , 'hitman' , 'inglourious basterd' );
  echo $film[0];
  echo "<br>";

$utilisateur = array (
  'prenom' => 'Juan',
  'nom' => 'Pablo',
  'adresse' => '3 Rue du Paradis',
  'ville' => 'Bruxelles'
      );

// Décris-toi dans une tableau associatif: $moi. Utilise au moins deux valeurs de chaque type:
//   texte (par exemple prenom), booléenne (par exemple aime_le_foot) et Int (par exemple: age).

$moi = array (
  'prenom' => 'mehdi',
  'nom' => 'Trabelsi',
  'hobby' => 'cosplay',
  'situation' => 'en couple',
  'aime le foot' => false,
  'aime jouer' => true,
  'age' => 23,
  'durée formation' => 6
);

$moi = array(
	'naissance'	=> 1973 ,
	'prenom' 		=> 'Alexandre' ,
	'nom' 	  		=> 'Plennevaux' ,
	'hobbies' 	=> array()
);


print_r($moi);
echo '</pre>';




 $papa = array (
  'prenom' => 'Abdallah',
  'nom' => 'Trabelsi',
  'age' => 60 ,
  'profession' => 'professeur' ,
  'hobby' => array ( 'travailler' , 'dormir' ),
  );
print_r ($papa);

echo '<br>';
echo '<br>';



$moi = array (

'prenom' => 'mehdi',
'nom' => 'Trabelsi',
'situation' => 'en couple',
'age' => 23,
'durée formation' => 6,
'hobby' => array ('foot', 'jeu'),
'papa' => ($papa),
);
 print_r($moi);

 echo '<br>';

 $moi = array(
         'prenom' => 'mehdi',
         'nom' => 'trabelsi',
         'situation' => 'en couple',
         'aime le foot' => FALSE,
         'aime la musique' => TRUE,
         'hobbies' => array (
                               'jeu' => 'overwatch',
                               'musique' => 'piano'
                             ),
       );
       $papa = array(
         'prenom' => 'Abdellah',
         'nom' => 'Trabelsi',
         'aime le foot' => TRUE,
         'aime la musique' => TRUE,
         'hobbies' => array (
                               'sport' => 'natation',
                               'lecture'=> 'scientique',
                             ),
         'fils' => $moi,
       );
         echo '<pre>';
           print_r($moi);
         echo '</pre>';
         echo ('Nombre de mes hobbies : ');
         $hobbies_moi= count($moi['hobbies']);
         echo $hobbies_moi;
         echo ('<br/>');
         echo ('Nombre de ses hobbies : ');
         $hobbies_papa = count($papa['hobbies']);
         echo $hobbies_papa;
         echo ('<br/>');
         echo ('Somme de mes hobbies et de ceux de mon papa : ');
         $nos_hobbies= $hobbies_moi + $hobbies_papa;
         echo $nos_hobbies;

         array_push($moi['hobbies'],'taxidermie');
?>


<?php
      $moi = array(
        'prenom' => 'Mehdi',
        'hobbies' => array (
                              'sport' => 'fresbee',
                              'jeu'=> 'overwatch',
                              'artistique'=>'cosplay'
                            ),
      );
      $ame_soeur = array(
        'prenom' => 'Gwen',
        'hobbies' => array (
                              'creation' => 'bijou',
                              'jeu'=> 'overwatch',
                              'artistique'=>'graphiste',
                            ),
      );
        echo '<pre>';
          print_r($moi);
        echo '</pre>';
        echo '<pre>';
          print_r($ame_soeur);
        echo '</pre>';
        echo "Les hobbies de notre enfant si intersection : <br/>";
        $hobbie_enfant_inter = array_intersect ($moi['hobbies'], $ame_soeur['hobbies']);
        print_r ($hobbie_enfant_inter);
        echo '<br/>';
        echo "Les hobbies de notre enfant si fusion : <br/>";
        $hobbie_enfant_fusion = array_merge($moi['hobbies'], $ame_soeur['hobbies']);
        print_r ($hobbie_enfant_fusion);
      ?>

      <?php
      $web_development = array (
          'frontend' => array(
          ),
          'backend' => array(
          ),
        );
      echo '<pre>';
        print_r($web_development);
      echo '</pre>';
      array_push ($web_development[frontend],'xhtml');
      array_push ($web_development[backend],'Ruby on Rails');
      array_push ($web_development[frontend],'CSS');
      array_push ($web_development[frontend],'Flash');
      array_push ($web_development[frontend],'Javascript');
      echo '<pre>';
        print_r($web_development);
      echo '</pre>';
      $web_development[frontend][0] ='HTML';
      echo '<pre>';
        print_r($web_development);
      echo '</pre>';
      unset($web_development[frontend][2]);
      echo '<pre>';
        print_r($web_development);
      echo '</pre>';
            ?>
