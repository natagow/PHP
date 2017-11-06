<?php
$chambre_est_sale = false;
  if ( $chambre_est_sale = true ) {
      $chambre_est_sale = "Range, ça pue";

    }else if ( $chambre_est_sale = false ){
    $chambre_est_sale = "Ta chambre est trop propre, vis un peu!";
}
echo $resultat;

?>

<?php
$chambre_est_sale = "en ordre";
  if ( $chambre_est_sale == "dégoutante" ) {
    $chambre_est_sale = "Range tu pue";

}elseif ( $chambre_est_sale == "sale" ){
    $chambre_est_sale = "range c'est sale";
}elseif ( $chambre_est_sale == "en ordre" ){
    $chambre_est_sale = "ça va c'est en ordre";
}elseif ( $chambre_est_sale == "immaculée" ){
    $chambre_est_sale = "waw comment ça clacs";
}elseif ( $chambre_est_sale == "maniaque" ){
    $chambre_est_sale = "sors tu fais que ranger frèr";
}
echo $chambre_est_sale;
?>
