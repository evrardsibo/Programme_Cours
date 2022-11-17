<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : Boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $random = rand(1, 20);
    $i = 1;
    // while ($i < $random) {
    //     $i++;
    // }
    while ($random < 15) {
        
        echo "Essaie $i : $random est trop petit (<15) <br>";
        $random = rand(1, 20);
        $i++;
    }
    echo '<br>';
    echo "Le chiffres est : $random";
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
