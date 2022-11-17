<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Boucle For"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
 $random = rand(5, 15);
 echo "<h2>Voici la table de multiplacation de $random</h2>";
 //for($i=1; $random )
 $arr = [];
 for($i=1; $i <= 10 ; $i++)
 {
      $result= $i * $random ;
      echo "$random * $i = $result <br>";
 }    
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
