<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Test"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $random = rand(1, 100);
    $random1 = rand(1, 100);
    $result = abs($random - $random1);
    echo "Le chiffre 1 : <b>$random</b>";
    echo '<br>';
    echo "Le chiffre 1 : <b>$random1</b>";;
    echo '<br>';
    if($result <= 25 && $result >= 75)
    {
       echo "La valeur  <b>$random</b> - <b>$random1</b>  n'est pas comprise entre 25 et 75";
    }else
    {
      echo "La valeur  <b>$random</b> - <b>$random1</b>  est  comprise entre 25 et 75";
    }
    echo '<br>';
    echo "<b>$result</b>";


?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
