<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Test"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
 $random = rand(1, 20);
 echo "<h2> Le chiffres est : $random</h2>";
 if ($random <= 5)
 {
     echo 'Il est compris entre 1 et 5';
 }elseif($random <= 10)
 {
    echo 'Il est compris entre 6 et 10'; 
 }elseif($random <= 15)
 {
    echo 'Il est compris entre 11 et 15'; 
 }else
 {
    echo 'Il est compris entre 16 et 20'; 
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
