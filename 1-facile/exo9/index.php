<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Function"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $a = 5;
    $b = 122 ;

    function checkNumber($number)
    {
        if ($number % 2 === 0) {
            return "Le chiffres $number est  pair";
        }else
        {
            return "Le chiffres $number n'est pas pair";
        }
    }
    
    echo checkNumber($a);
    echo '<br>';
    echo checkNumber($b);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
