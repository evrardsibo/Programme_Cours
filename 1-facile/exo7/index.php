<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : switch"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $random = rand(1, 12);
    // echo $random;
    // echo '<br>';
    $mois = '';
    switch ($random) {
        case 1 : $mois = 'Janvier';
            break;
        case 2 : $mois = 'Fervier';
             break;
        case 3 : $mois = 'Mars';
            break;
        case 4 : $mois = 'Avril';
            break;
        case 5: $mois = 'Mai';
            break;
        case 6 : $mois = 'Juin';
            break;
        case 7 : $mois = 'Juillet';
            break;
        case 8 : $mois = 'Aout';
            break;
        case 9 : $mois = 'Septembre';
            break;
        case 10 : $mois = 'Octobre';
            break;
        case 11 : $mois = 'Novembre';
            break;
        case 12 : $mois = 'Decembre';
            break;
        default:
            # code...
            break;
    }

    echo "Le mois <b>$random</b> en chiffres correspond au mois <b>$mois</b> en lettres"
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
