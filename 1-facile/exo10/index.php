<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Function"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
   $world = "Coucou";
   //$vowel = ['a','i','u','o','e'];
   //echo $change = str_replace($vowel, "" , $world);
   function strreplace($change)
   {
        $vowel = ['a','i','u','o','e'];
        return str_replace($vowel, "", $change);
   }
   $withoutVowe = strreplace($world);

   echo "$world sans voyelle est $withoutVowe " ;
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
