<?php
// declaration du tableaux
$months = array (
  'janvier',
  'février',
  'mars',
  'avril',
  'mai',
  'juin',
  'juillet',
  'aout',
  'septembre',
  'octobre',
  'novembre',
  'décembre'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <p>
            <?php
            // remplacement de aout par août
            $months[7] = 'août';
            // affichage de la septiéme valeur du tableaux
            echo $months[7];
            ?>
        </p>
    </body>
</html>