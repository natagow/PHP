<!-- Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!". -->



<?php
$hour = ((new DateTime())->format('Hi'));
if ($hour >= 500 and $hour <= 900) {
  echo "Bonjour";
} elseif ($hour > 900 and $hour <= 1200) {
    echo "Bonne journée !";
} elseif ($hour > 1200 and $hour <= 1600) {
    echo "Bonne après midi !";
} elseif ($hour > 1600 and $hour <= 2100) {
    echo "Bonne soirée !";
} elseif ($hour > 2100 and $hour <= 500) {
    echo "bonne nuit";
}
;
?>
